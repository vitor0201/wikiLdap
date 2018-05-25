window.onload = function () {
    var url = window.location.pathname.split('/');
    CKEDITOR.replace('body', {
        'filebrowserBrowseUrl': '/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files&lang=pt-br',
        'filebrowserImageBrowseUrl': '/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images&lang=pt-br',
        'filebrowserFlashBrowseUrl': '/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash&lang=pt-br',
        'filebrowserUploadUrl': '/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files&lang=pt-br',
        'filebrowserImageUploadUrl': '/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images&lang=pt-br',
        'filebrowserFlashUploadUrl': '/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash&lang=pt-br'
    });
}

function copyText(i) {
    var element = document.getElementById("" + i + "");
    var selection = window.getSelection();
    var range = document.createRange();
    range.selectNodeContents(element);
    selection.removeAllRanges();
    selection.addRange(range);
    var successful = document.execCommand('copy');

    if (!successful) {
        alert('Erro ao Copiar"');
    }
}

function ShowFileInfo(fileUrl, data) {
    if (window.opener && !window.opener.closed) {
        var gp = new Array();
        var loc = location.search;
        if (loc) {
            loc = loc.substring(1);
            var parms = loc.split('&');
            for (var i = 0; i < parms.length; i++) {
                nameValue = parms[i].split('=');
                gp[nameValue[0]] = unescape(nameValue[1]);
            }
        }
        var editor = gp['CKEditor'];
        /* I had multiple CKEDITORS using the same nav bar so there might be a little more code than you would normally need here. */
        var sourceElement = window.opener.CKEDITOR.instances[editor]._.filebrowserSe;
        var dialog = sourceElement.getDialog();
        var targetElement = sourceElement.filebrowser.target || null;
        url = fileUrl.replace(/#/g, '%23');

        /*  here is where I did stuff to the url */

        // If there is a reference to targetElement, update it.
        if (targetElement) {
            var target = targetElement.split(':');
            var element = dialog.getContentElement(target[0], target[1]);
            if (element) {
                element.setValue(url);
                dialog.selectPage(target[0]);
            }
        }
    }
}
