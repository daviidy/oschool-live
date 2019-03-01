<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">

  <script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>


</head>

<body>

  <form method="post" enctype="multipart/form-data" action="{{ url('emails', $email) }}">
    {{ csrf_field() }}
    {{ method_field('patch') }}

  @include('includes.header_email')





  <table style="margin-top: 5rem;" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td style="background-color:#fafbfc">
          <center bgcolor="#fafbfc" style="width:100%;background-color:#fafbfc">
            <div id="m_-3128360670147004929maincontent" style="max-width:620px;margin:0 auto">
              <div class="m_-3128360670147004929preheader" style="font-size:1px;line-height:1px;display:none!important">On ne va pas à l'école, on y est déjà.</div>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                <tbody>
                  <tr>
                    <td>
                      <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                          <tr>
                            <td align="center" style="padding-bottom:20px">
                              <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:18px;color:#00c0ea;text-align:center;width:152px">
                                <tbody>
                                  <tr>
                                    <td style="padding:20px 0 10px 0"> <img
                                          alt="Oschool" border="0" src="https://code.oschool.ci/dashboard/img/thumbnail.png"
                                          style="display:block;width:152px!important;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;color:#000000;text-transform:uppercase;text-align:center;letter-spacing:1px"
                                          width="152" class="CToWUd"> </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                          <tr>
                            <td bgcolor="#fafbfc" style="width:7px;font-size:1px"><br></td>
                            <td bgcolor="#f5f6f7" style="width:1px;font-size:1px"><br></td>
                            <td bgcolor="#f0f2f3" style="width:1px;font-size:1px"><br></td>
                            <td bgcolor="#edeef1" style="width:1px;font-size:1px"><br></td>
                            <td bgcolor="#ffffff">
                              <table border="0" cellpadding="0" cellspacing="0" style="width:100%;border-top:3px solid #02b3e4">
                                <tbody>
                                  <tr>
                                    <td align="center" style="padding:20px 40px 20px 40px">
                                      <div style="display:inline-block;width:100%;max-width:520px">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:24px;color:#525c65;text-align:center;width:100%">
                                          <tbody>
                                            <tr>
                                              <td class="m_-3128360670147004929body-text" align="left" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:24px;text-align:center;width:100%">
                                                <textarea name="editor1" id="editor1" contenteditable="true" style="font-size:18px;line-height:23px;font-weight:bold">{{$email->editor1}}</textarea>
                                                <p style="Margin:20px 0 0 0">Ce parcours pourrait vous intéresser</p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" style="padding:0px 50px 0px 50px">
                                      <div style="display:inline-block;width:100%;max-width:350px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;text-align:center;width:100%">
                                          <tbody>
                                            <tr>
                                              <td align="center">
                                                <textarea name="editor3" id="editor3" contenteditable="true">
                                                  {{$email->editor3}}

                                                </textarea>
                                              </td>
                                            </tr>

                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" style="padding:10px 0 10px 0">
                                      <div style="display:inline-block;width:100%;max-width:520px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:24px;text-align:center;width:100%">
                                          <tbody>
                                            <tr>
                                              <td style="padding:0 30px 0 30px">
                                                <textarea name="editor2" id="editor2" contenteditable="true" style="Margin:0 0 20px 0;color:#525c65">{{$email->editor2}}</p></textarea>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" style="padding:5px 40px 50px 40px">
                                      <div style="display:inline-block;width:100%;max-width:520px">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:24px;text-align:center;width:100%">
                                          <tbody>
                                            <tr>
                                              <td class="m_-3128360670147004929body-text" align="center" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:24px;text-align:center;width:100%">
                                                <div style="display:inline-block;width:100%;max-width:520px">
                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:16px;line-height:26px;text-align:center;width:100%">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center" valign="top" style="padding-bottom:0">
                                                          <table width="240" align="center" border="0" cellspacing="0" cellpadding="0" style="background-color:#01b3e3;border-radius:4px;border-collapse:separate!important">
                                                            <tbody>
                                                              <tr>
                                                                <td width="240" height="46" align="center" valign="middle" style="font-size:13px;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-weight:semibold"> <a href="{{$email->lien}}"
                                                                    title="COMMENCER" style="text-decoration:none;color:#ffffff;letter-spacing:2px;display:block;padding-top:10px;padding-bottom:10px" target="_blank" >
                                                                    COMMENCER</a> </td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>

                                  @include('includes.etudiants_work')


                                  <tr>
                                    <td bgcolor="#e0e2e5" style="height:1px;width:100%;line-height:1px;font-size:0"><br></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#e0e2e4" style="height:1px;width:100%;line-height:1px;font-size:0"><br></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#e8ebed" style="height:1px;width:100%;line-height:1px;font-size:0"><br></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#f1f3f6" style="height:1px;width:100%;line-height:1px;font-size:0"><br></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td bgcolor="#edeef1" style="width:1px;font-size:1px"><br></td>
                            <td bgcolor="#f0f2f3" style="width:1px;font-size:1px"><br></td>
                            <td bgcolor="#f5f6f7" style="width:1px;font-size:1px"><br></td>
                            <td bgcolor="#fafbfc" style="width:7px;font-size:1px"><br></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align:center;padding:0">
                      <div style="display:inline-block;width:100%;max-width:520px;vertical-align:top">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                          <tbody>
                            <tr>
                              <td align="center" style="padding:30px 0;border-bottom:1px solid #e5ebef">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:265px">
                                  <tbody>
                                    <tr>
                                      <td align="center"> <a href="#"><img
                                            alt="IOS" border="0" height="44" src="https://ci6.googleusercontent.com/proxy/idlfJpK2BUW6-33QNx3_68ErV5yheHtRh6VggS4GTQ87bCsfDtXY7v90xG7SNpeUEBsfqwVlHlphH5H8ZFwEKEY6DY8RXwlWmOxt7QF-PzMoIiXGCxk=s0-d-e1-ft#https://s3-us-west-2.amazonaws.com/udacity-email/Footer/ios-btn.gif"
                                            style="display:block;width:120px!important" width="120" class="CToWUd"></a> </td>
                                      <td align="center"> <a href="#"><img
                                            alt="Android" border="0" height="44" src="https://ci3.googleusercontent.com/proxy/8nh6nFCBEPsuABOns_CTZ2-JO9RRYOs2brb_iVmYwxBapIGeDR4pMsPDjVHPxpd8mCn8vBT_7mU22KpjXHgvwFN9v3noun7fUyL9WjdaZHUvFOSDDPRUz3TM=s0-d-e1-ft#https://s3-us-west-2.amazonaws.com/udacity-email/Footer/android-btn.gif"
                                            style="display:block;width:120px!important" width="120" class="CToWUd"></a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </td>
                  </tr>
                  @include('includes.credit_oschool_email')
          </center>
        </td>
      </tr>
    </tbody>
  </table>

<!--
  <table width="240" align="center" border="0" cellspacing="0" cellpadding="0" style="margin-top: 3rem;background-color:#01b3e3;border-radius:4px;border-collapse:separate!important">
    <tbody>
      <tr>
        <td width="240" height="46" align="center" valign="middle" style="font-size:13px;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-weight:semibold">
          <a
            title="ENREGISTRER ET ENVOYER" style="text-decoration:none;color:#ffffff;letter-spacing:2px;display:block;padding-top:10px;padding-bottom:10px">
            ENREGISTRER ET ENVOYER</a> </td>
      </tr>
    </tbody>
  </table>
-->


  </form>


<script src="/ckeditor/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.11.2/standard-all/ckeditor.js"></script>
<script src="/ckeditor/plugins/inlinesave/plugin.js"></script>


  <script>
    // Turn off automatic editor creation first.
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline( 'editor1', {

      toolbar: [{
          name: 'document',
          items: ['Print']
        },
        {
          name: 'clipboard',
          items: ['Undo', 'Redo']
        },
        {
          name: 'styles',
          items: ['Format', 'Font', 'FontSize']
        },
        {
          name: 'colors',
          items: ['TextColor', 'BGColor']
        },
        {
          name: 'align',
          items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
        },
        '/',
        {
          name: 'basicstyles',
          items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
        },
        {
          name: 'links',
          items: ['Link', 'Unlink']
        },
        {
          name: 'paragraph',
          items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
        },
        {
          name: 'insert',
          items: ['Image', 'Table']
        },
        {
          name: 'tools',
          items: ['Maximize']
        },
        {
          name: 'editing',
          items: ['Scayt']
        }
      ],

      extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

      // Adding drag and drop image upload.
      extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
      uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
      filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
      filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
      filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

      height: 560,

      removeDialogTabs: 'image:advanced;link:advanced'

    } );


</script>


<script>
  // Turn off automatic editor creation first.
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline( 'editor2', {

    toolbar: [{
        name: 'document',
        items: ['Print']
      },
      {
        name: 'clipboard',
        items: ['Undo', 'Redo']
      },
      {
        name: 'styles',
        items: ['Format', 'Font', 'FontSize']
      },
      {
        name: 'colors',
        items: ['TextColor', 'BGColor']
      },
      {
        name: 'align',
        items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
      },
      '/',
      {
        name: 'basicstyles',
        items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
      },
      {
        name: 'links',
        items: ['Link', 'Unlink']
      },
      {
        name: 'paragraph',
        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
      },
      {
        name: 'insert',
        items: ['Image', 'Table']
      },
      {
        name: 'tools',
        items: ['Maximize']
      },
      {
        name: 'editing',
        items: ['Scayt']
      }
    ],

    extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

    // Adding drag and drop image upload.
    extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
    uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

    // Configure your file manager integration. This example uses CKFinder 3 for PHP.
    filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
    filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
    filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

    height: 560,

    removeDialogTabs: 'image:advanced;link:advanced'

  } );


</script>

<script>

CKEDITOR.inline( 'editor3', {

  toolbar: [{
      name: 'document',
      items: ['Print']
    },
    {
      name: 'clipboard',
      items: ['Undo', 'Redo']
    },
    {
      name: 'styles',
      items: ['Format', 'Font', 'FontSize']
    },
    {
      name: 'colors',
      items: ['TextColor', 'BGColor']
    },
    {
      name: 'align',
      items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
    },
    '/',
    {
      name: 'basicstyles',
      items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting']
    },
    {
      name: 'links',
      items: ['Link', 'Unlink']
    },
    {
      name: 'paragraph',
      items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
    },
    {
      name: 'insert',
      items: ['Image', 'Table']
    },
    {
      name: 'tools',
      items: ['Maximize']
    },
    {
      name: 'editing',
      items: ['Scayt']
    }
  ],

  extraAllowedContent: 'h3{clear};h2{line-height};h2 h3{margin-left,margin-top}',

  // Adding drag and drop image upload.
  extraPlugins: 'print,format,font,colorbutton,justify,uploadimage',
  uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

  // Configure your file manager integration. This example uses CKFinder 3 for PHP.
  filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
  filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
  filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
  filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

  height: 560,

  removeDialogTabs: 'image:advanced;link:advanced'

} );

</script>

</body>

</html>
