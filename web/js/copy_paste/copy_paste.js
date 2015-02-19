window.addEventListener('load', function (e) {

    var node = document.getElementById('edit-box');
    var copyNode = document.getElementById('custom-copy');

    copyNode.oncopy = function (e) {
        log('copy');
        if (e.clipboardData) {
            e.preventDefault();
            e.clipboardData.setData('text/xcustom', 'Added this custom data at copy');

            var setStatus = e.clipboardData.setData(
                    'text/plain', 'This is not the text you copied, it ' +
                    'was changed by the copy event handler'
                );
            log('setData: ' + setStatus);
        }
        if (window.clipboardData) {
            e.returnValue = false;
            var setStatus = window.clipboardData.setData(
                    'Text', 'This is not the text you copied, it ' +
                    'was changed by the copy event handler'
                );
            log('setData: ' + setStatus);
        }
    };

    node.onpaste = function (e) {
        log('paste');
        if (e.clipboardData) {
            log('event.clipboardData');
            if (e.clipboardData.types) {
                log('event.clipboardData.types');

                // Look for a types property that is undefined
                if (!isArray(e.clipboardData.types)) {
                    log('event.clipboardData.types is undefined');
                }

                // Loop the data store by type and display it
                var i = 0;
                var_dump(e.clipboardData.types);
                while (i < e.clipboardData.types.length) {
                    var key = e.clipboardData.types[i];
                    var val = e.clipboardData.getData(key);
                    log((i + 1) + ': ' + key + ' - ' + val);
                    i++;
                }

            } else {
                // Look for access to data if types array is missing
                var text = e.clipboardData.getData('text/plain');
                var url = e.clipboardData.getData('text/uri-list');
                var html = e.clipboardData.getData('text/html');
                var custom = e.clipboardData.getData('text/xcustom');
                log('text/plain - ' + text);
                if (url !== undefined) {
                    log('text/uri-list - ' + url);
                }
                if (html !== undefined) {
                    log('text/html - ' + html);
                }
                if (custom !== undefined) {
                    log('text/xcustom - ' + custom);
                }
            }
        }

        // IE event is attached to the window object
        if (window.clipboardData) {
            log('window.clipboardData');
            // The schema is fixed
            var text = window.clipboardData.getData('Text');
            var url = window.clipboardData.getData('URL');
            log('Text - ' + text);
            if (url !== null) {
                log('URL - ' + url);
            }
        }
        // Needs a few msec to excute paste
        window.setTimeout(logContents, 50, true);
    };

    // Button events
    var btn = document.getElementById('clear-logs');
    btn.onclick = function (e) {
        clearLog();
    };
});

function logContents() {
    var node = document.getElementById('edit-box');
    log('Current contents - ' + node.innerHTML);
}

function log(str) {
    var node = document.getElementById('log-box');
    var li = document.createElement('li')
    li.appendChild(document.createTextNode(str));
    node.appendChild(li);
}

function clearLog() {
    var node = document.getElementById('log-box');
    while (node.firstChild) {
        node.removeChild(node.firstChild);
    }
}

function isArray(obj) {
    return obj && !(obj.propertyIsEnumerable('length')) && 
        typeof obj === 'object' && typeof obj.length === 'number';
}; 