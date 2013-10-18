<div class="ace-file-input">
    <input type="file" id="id-input-file-2">
<!--    <label class="file-label" data-title="Choose">
        <span class="file-name" data-title="No File ...">
            <i class="icon-upload-alt"></i>
        </span></label>
    <a class="remove" href="#">
        <i class="icon-remove"></i>
    </a>-->
</div>
<script>
    $(function() {
        $('#id-input-file-2').ace_file_input({
            no_file         : 'Sin archivo ...',
            btn_choose      : 'Escoger',
            btn_change      : 'Cambiar',
            droppable       : false,
            onchange        : null,
            thumbnail       : false,
            before_change   : function(files, dropped) {
                var file = files[0];
                if (typeof file == "string") {
                    //file is just a file name here 
                    //(used in browsers that don't support FileReader API such as IE8)
                    if (! (/^.+\.(?:[pP][dD][fF])$/).test(file) ) {
                        //not an image extension?
                        //alert user
                        return false;
                    }
                } else {
                    var type = $.trim(file.type);
                    if (
                       ( type.length > 0 && ! (/^application\/(?:[pP][dD][fF])$/).test(type) )
                       || 
                       //for android's default browser!
                       ( type.length == 0 && ! (/^.+\.(?:[pP][dD][fF])$/).test(file.name) )
                       )
                    {
                       //alert user
                       return false;
                    }
                }
                return true;
            }
        });
    });
</script>


<!--<div class="widget-box">
    <div class="widget-header">
        <h4>Custom File Input</h4>
        <span class="widget-toolbar">
            <a href="#" data-action="collapse">
                <i class="icon-chevron-up"></i>
            </a>
            <a href="#" data-action="close">
                <i class="icon-remove"></i>
            </a>
        </span>
    </div>
    <div class="widget-body">
        <div class="widget-main">
            <div class="ace-file-input">
                <input type="file" id="file-input-1">
            </div>
        </div>
    </div>
    <label>
        <input type="checkbox" checked="checked" name="file-format" id="id-file-format" class="ace" />
        <span class="lbl"> Allow only images</span>
    </label>
</div>
<script>
    $(function(){
        $('#file-input-1').ace_file_input({
            no_file     : 'Respaldo PDF ...',
            btn_choose  : 'Escoger',
            btn_change  : 'Cambiar',
            onchange    : null,
            thumbnail   : false,
            whitelist   : 'pdf',
            blacklist   : 'gif|png|jpg|jpeg|exe|php|xlsx'
        });
        
        var before_change
        var btn_choose
        var no_icon
        if ($('#id-file-format').is(':checked')) {
            btn_choose = "Escoger";
            no_icon = "icon-file-text";
            before_change = function(files, dropped) {
                var allowed_files = [];
                for(var i = 0 ; i < files.length; i++) {
//                    var file = files[i];
//                    var type = $.trim(file.type);
//                    if ( !(/(.*?)\.(pdf|PDF)$/i).test(file) || !(/(.*?)\.(pdf|PDF)$/i).test(type) ) {
//                        continue;
//                    } else {
//                        return false;
//                    }
                    allowed_files.push(file);
                }
                if(allowed_files.length == 0) return false;
                return allowed_files;
            }
        }
        var file_input = $('#file-input-1');
        file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
        file_input.ace_file_input('reset_input');
    });
</script>-->