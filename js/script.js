function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

var timeout;
function suggestion() {
    /*
    Implemented DEBOUNCING for optimization of network calls.
    */
    clearTimeout(timeout);
    var inputval = $('input[name=search]').val();
    if (inputval != "") {
        timeout = setTimeout(function () {
            $.ajax({
            url: "searchSuggestion.php",
            method: "GET",
            data: {data:inputval},
            success: function (res) {
                res = JSON.parse(res);
                var displayItem = '';
                res.forEach(function (item) {
                    var pc = item.ProductCategory;
                    var psc = item.ProductSubCategory;
                    displayItem += '<div><a style="text-decoration:none; color:#fc5a6d;" href="single-category-shop.php?category=' + pc + '&subType=' + psc + '"><div style="padding:10px;text-align:center;border-bottom:1px solid #f2f2f2;"><span style="font-weight:bold;">' + pc + '</span> : ' + psc + '</div></a></div>';
                });
                $('#search').css('border-bottom-right-radius', '0px');
                $('#search').css('border-bottom-left-radius', '0px');
                $('#suggestionList').show();
                if (displayItem == '') {
                    $('#suggestionList').html('<div style="text-align:center;padding:10px;font-weight:bold;">No Result Found</div>');
                } else {
                    $('#suggestionList').html(displayItem);
                }
            }
        });
        }, 500);
    } else {
        $('#search').css('border-bottom-right-radius', '4px');
        $('#search').css('border-bottom-left-radius', '4px');
        $('#suggestionList').hide();
    }
    
}

