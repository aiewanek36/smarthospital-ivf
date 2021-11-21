/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.skin.name="bootstrapck";
CKEDITOR.editorConfig = function( config ) {
    CKEDITOR.config.height = 350;
    config.skin = 'bootstrapck';
    config.toolbarGroups = [
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'forms', groups: [ 'forms' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
        { name: 'links', groups: [ 'links' ] },
        { name: 'insert', groups: [ 'insert' ] },
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'tools', groups: [ 'tools' ] },
        { name: 'others', groups: [ 'others' ] },
        { name: 'about', groups: [ 'about' ] }
    ];

    config.removeButtons = 'Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,About,SpecialChar,Smiley,Flash,Anchor,BidiRtl,BidiLtr,Language,RemoveFormat,Superscript,Subscript,Strike,PageBreak,Iframe,Maximize,ShowBlocks,Replace,Find,SelectAll,Save,NewPage,Preview,Print,Templates,Scayt,BulletedList,Outdent,Indent,JustifyBlock,HorizontalRule';

    config.extraPlugins = 'image';
    config.filebrowserUploadUrl = 'upload.php';
    config.image_removeLinkByEmptyURL= true;
    config.image_previewText = CKEDITOR.tools.repeat( ' Example ', 50 );
};
