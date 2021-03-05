function enableLoginButton(enabled) {
    if (enabled) {
        $("#JobSync_LoginButton").show();
        $("#JobSync_LoadingFakeButton").hide();
    } else {
        var height = $("#JobSync_LoginButton").height();
        var width = $("#JobSync_LoginButton").outerWidth();
        $("#JobSync_LoadingFakeButton").height(height);
        $("#JobSync_LoadingFakeButton").width(width);

        $("#JobSync_LoginButton").hide();
        $("#JobSync_LoadingFakeButton").show();
    }
}

function setForgotPasswordButtonMode(mode) {
    switch (mode) {
        case 'normal':
            $("#JobSync_ForgotPasswordClose").hide();
            $("#JobSync_ForgotPasswordSend").show();
            $("#JobSync_ForgotPasswordCancel").show();
            $("#JobSync_ForgotPasswordFakeButton").hide();

            $('#JobSync_ForgotPasswordMessageDone').hide();
            break;
        case 'loading':
            var height = $("#JobSync_ForgotPasswordSend").height();
            var width = $("#JobSync_ForgotPasswordSend").outerWidth();
            $("#JobSync_ForgotPasswordFakeButton").height(height);
            $("#JobSync_ForgotPasswordFakeButton").width(width);

            $("#JobSync_ForgotPasswordClose").hide();
            $("#JobSync_ForgotPasswordSend").hide();
            $("#JobSync_ForgotPasswordCancel").hide();
            $("#JobSync_ForgotPasswordFakeButton").show();
            break;
        case 'close':
            $("#JobSync_ForgotPasswordClose").show();
            $("#JobSync_ForgotPasswordSend").hide();
            $("#JobSync_ForgotPasswordCancel").hide();
            $("#JobSync_ForgotPasswordFakeButton").hide();
            break;
    }
}

function callTestFunction(currentJobSyncSite) {
    $.ajax({
        crossDomain: true,
        type: "GET",
        dataType: "jsonp",
        data: {},
        contentType: "application/json; charset=utf-8",
        url: currentJobSyncSite + "/WebLogin.asmx/TestFunction",
        success: function (data) {
            alert(data.ResponseMessage);
        },
        error: function (result, status) {
            alert('Failed to log in, please contact an administrator to report this error.');
        }
    });
}

function ajaxLogin(currentJobSyncSite, currentB2BSite, currentAuthSite, companyCode) {
    var username = $("#JobSync_UserName").val();
    var pwHash = b64_md5($("#JobSync_Password").val());
    var remember = $("#JobSync_Remember")[0].checked;

    enableLoginButton(false);

    $.ajax({
        type: "POST",
        dataType: "json",
        data: JSON.stringify({ userName: username, password: pwHash + '==', companyCode: companyCode, companyID: 0 }),
        contentType: "application/json",
        url: currentAuthSite + "/api/Authenticate/UserLogin",
        success: function (data, status) {
            var response = data;
            if (response.ResponseCode == 0) {
                if (remember) {
                    setCookieValue("JobSync_Login", "username", username);
                    setCookieValue("JobSync_Login", "remember", remember);
                }
                var currentURL = encodeURIComponent(window.location.href);

                if (response.IsCustomer) {
                    if (currentJobSyncSite != null) {
                        
                        window.location = currentB2BSite + "/Account/AutoLogin?accesstoken=" + response.ResponseMessage + "&LoginPage=" + currentURL;
                    } else {
                        
                        window.location = currentJobSyncSite + "/AutoLogin.aspx?accesstoken=" + response.ResponseMessage + "&LoginPage=" + currentURL;
                    }
                } else {
                    window.location = currentJobSyncSite + "/AutoLogin.aspx?accesstoken=" + response.ResponseMessage + "&LoginPage=" + currentURL;
                }
            } else {
                enableLoginButton(true);
                alert(response.ResponseMessage);
            }
        },
        error: function (result, status) {
            enableLoginButton(true);
            alert('Failed to log in, please contact an administrator to report this error.');
        }
    });
}


// Create the XHR object.
function createCORSRequest(method, url) {
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr) {
        // XHR for Chrome/Firefox/Opera/Safari.
        xhr.open(method, url, true);
    } else if (typeof XDomainRequest != "undefined") {
        // XDomainRequest for IE.
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        // CORS not supported.
        xhr = null;
    }
    return xhr;
}

function sendForgotPassword(currentJobSyncSite, currentB2BSite, currentAuthSite, code) {
    var email = $("#JobSync_ForgotPasswordEmail").val();

    setForgotPasswordButtonMode('loading');

    var currentURL = encodeURIComponent(window.location.href);

    $.ajax({
        type: "GET",
        dataType: "jsonp",
        data: { email: email, companyCode: code, authenticationToken: code, currentURL: currentURL },
        contentType: "application/javascript; charset=utf-8",
        url: currentJobSyncSite + "/WebLogin.asmx/ForgotPassword_JSONP",
        success: function (data, status) {
            var response = data;
            if (response.ResponseCode == 0) {
                $('#JobSync_ForgotPasswordMessageDone').show();
                setForgotPasswordButtonMode('close');
            } else {
                setForgotPasswordButtonMode('normal');
                alert(response.ResponseMessage);
            }
        },
        error: function (result, status) {
            setForgotPasswordButtonMode('normal');
            alert('Failed to send email, please contact an administrator to report this error.');
        }
    });
}

function enterClicks(event) {
    //click the passed in button if the key pressed was enter
    if (event.keyCode == 13) {
        event.returnValue = false;
        event.cancel = true;
        if (event.preventDefault)
            event.preventDefault();
        $("#JobSync_LoginButton")[0].click();
    }
}

function showForgotPassword() {    
    var email = $("#JobSync_UserName").val();
    $("#JobSync_ForgotPasswordEmail").val(email);

    $("#JobSync_ForgotPasswordPanel").show();
}

function hideForgotPassword() {
    $("#JobSync_ForgotPasswordPanel").hide();
    setForgotPasswordButtonMode('normal');
}

function setCookieValue(cname, vname, value) {
    var cookie = getCookie(cname);

    var ca = cookie.split('&');

    var newCookie = '';
    var cookieUpdated = false;

    for (var i = 0; i < ca.length; i++) {
        var nameValue = ca[i].split('=');
        var currentName = nameValue[0];
        var currentValue = nameValue[1];

        if (i > 0) newCookie += '&'

        if (currentName == vname) {
            // Set cookie value
            newCookie += currentName + '=' + value;
            cookieUpdated = true;
        } else {
            // set value to its original value
            newCookie += ca[i];
        }
    }

    // Append the cookie value if it wasn't updated above (it's a new value).
    if (!cookieUpdated) {
        if (newCookie != '') newCookie += '&';
        newCookie += vname + '=' + value;
    }

    setCookie(cname, newCookie, 100000);
}

function getCookieValue(cname, vname) {
    var cookie = getCookie(cname);

    var name = vname + "=";
    var ca = cookie.split('&');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) != -1) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) != -1) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function initTestIFrame() {
    document.write("<iframe src='http://webtest.salesin.com/TestLogin.html'></iframe>");
}

function initLoginSection(currentJobSyncSite, code, currentB2BSite, currentAuthSite) {
    if (!currentB2BSite) currentB2BSite = '';
    if (!currentAuthSite) currentAuthSite = 'https://auth.salesin.com';

    var username = getCookieValue("JobSync_Login", "username");

    var rememberString = '';
    if (getCookieValue("JobSync_Login", "remember") != '') {
        var remember = getCookieValue("JobSync_Login", "remember");
        if (remember == "true") {
            rememberString = "checked='checked'";
        }
    }

    // document.write("<div class='_LoginContainer'>\
    //                     <span class='_LoginLabel UserName'>User Name</span>\
    //                     <input id='JobSync_UserName' type='text' class='_LoginTextBox UserName' onkeypress='enterClicks(event);' value='" + username + "' />\
    //                     <span class='_LoginLabel Password'>Password</span>\
    //                     <input id='JobSync_Password' type='password' class='_LoginTextBox Password' onkeypress='enterClicks(event);' />\
    //                     <span class='_LoginCheckBox'>\
    //                         <input id='JobSync_Remember' type='checkbox' " + rememberString + ">\
    //                         <label for='JobSync_Remember'>Remember Me</label>\
    //                     </span>\
    //                     <br />\
    //                     <input id='JobSync_LoginButton' type='button' class='_LoginButton' value='Sign In' onclick='ajaxLogin(&quot;" + currentJobSyncSite + "&quot;, &quot;" + currentB2BSite + "&quot;, &quot;" + currentAuthSite + "&quot;, &quot;" + code + "&quot;); return false;' />\
    //                     <div id='JobSync_LoadingFakeButton' class='_LoginButton Loading' style='display: none;'></div>\
    //                     <a class='_LoginLink' href='#' onclick='showForgotPassword();'>I forgot my password</a>\
    //                     <div id='JobSync_ForgotPasswordPanel' class='forgotPasswordPopup' style='display: none;'>\
	// 						<div>\
	// 							<span class='_ForgotPasswordInstruction'>Please enter your email address, and a link will be sent to you to reset your password.</span>\
    //                             <div class='emailContainer'>\
    //                                 <span class='_ForgotPasswordEmailLabel'>Email:</span>\
    //                                 <input id='JobSync_ForgotPasswordEmail' type='text' class='_LoginTextBox ForgotPassword' />\
    //                             </div>\
    //                             <span id='JobSync_ForgotPasswordMessageDone' class='_ForgotPasswordEmailMessage' style='display: none;'>A link to reset your password has been sent to this email address. Click this link to login and reset your password.</span>\
    //                         </div>\
	// 						<div class='resetPasswordButtons'>\
	// 							<input id='JobSync_ForgotPasswordSend' type='button' class='_LoginButton' value='Send Password' onclick='sendForgotPassword(&quot;" + currentJobSyncSite + "&quot;, &quot;" + currentB2BSite + "&quot;, &quot;" + currentAuthSite + "&quot;, &quot;" + code + "&quot;);' />\
	// 						</div>\
	// 					</div>\
    //                 </div>");
    document.write("<div class='_LoginContainer'>\
                    <span class='_LoginLabel UserName'>User Name</span>\
                    <input id='JobSync_UserName' type='text' class='_LoginTextBox UserName' onkeypress='enterClicks(event);' value='" + username + "' />\
                    <span class='_LoginLabel Password'>Password</span>\
                    <input id='JobSync_Password' type='password' class='_LoginTextBox Password' onkeypress='enterClicks(event);' />\
                    <span class='_LoginCheckBox'>\
                        <input id='JobSync_Remember' type='checkbox' " + rememberString + ">\
                        <label for='JobSync_Remember'>Remember Me</label>\
                    </span>\
                    <br />\
                    <input id='JobSync_LoginButton' type='button' class='_LoginButton' value='Sign In' onclick='ajaxLogin(&quot;" + currentJobSyncSite + "&quot;, &quot;" + currentB2BSite + "&quot;, &quot;" + currentAuthSite + "&quot;, &quot;" + code + "&quot;); return false;' />\
                    <div id='JobSync_LoadingFakeButton' class='_LoginButton Loading' style='display: none;'></div>\
                    <a class='_LoginLink' href='/contact'>Contact Us if you forget your password</a>\
                </div>");
}