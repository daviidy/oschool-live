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







  <table style="margin-top: 4rem;" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td style="background-color:#fafbfc">
          <center bgcolor="#fafbfc" style="width:100%;background-color:#fafbfc">
            <div id="m_-8305897295003843499maincontent" style="max-width:620px;margin:0 auto">
              <div class="m_-8305897295003843499preheader" style="font-size:1px;line-height:1px;display:none!important">Les cours à voir cette semaine sur Oschool </div>
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                <tbody>
                  <tr>
                    <td>
                      <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                        <tbody>
                          <tr>
                            <td align="center" style="padding-bottom:5px">
                              <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:13px;line-height:18px;color:#00c0ea;text-align:center;width:152px">
                                <tbody>
                                  <tr>
                                    <td align="center" style="padding:20px 0 20px 0"><a href="https://oschool.ci" style="text-decoration:none">
                                      <img
                                          alt="Oschool" border="0" src="https://code.oschool.ci/dashboard/img/thumbnail.png"
                                          style="display:block;width:152px!important;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:22px;line-height:26px;color:#000000;text-transform:uppercase;text-align:center;letter-spacing:1px"
                                          width="152" class="CToWUd"></a></td>
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
                              <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                <tbody>
                                  <tr>
                                    <td>
                                      <textarea name="editor1" id="editor1" contenteditable="true">
                                        @if($email->editor1)
                                        {{$email->editor1}}
                                        @else
                                      <img alt="This Week's Udacity-wide Favorites" border="0" src="https://ci5.googleusercontent.com/proxy/ZMi_cyQp6dXZQnOM4d8X2qtH072KsvdvdyJPdYHORNI4tloRoy3DObSh1nYN5dwE67SgiBvyvuQfDLlDeivwayGU7DrYh1jM5G4vnK4k738ES8Y2cWX4MXVGt3W5RO6NMausZBz4vdESvNw=s0-d-e1-ft#https://s3-us-west-2.amazonaws.com/udacity-email/Email+Promo+Heros/top-enrolled-hero.png"
                                        width="600" style="display:block;width:100%;max-width:600px;font-family:'Open Sans',Helvetica,Arial,sans-serif;font-size:25px;line-height:30px;font-weight:bold;color:#003e62;text-align:center" class="CToWUd a6T"
                                        tabindex="0">
                                        @endif
                                      </textarea>

                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" bgcolor="#fafbfc" style="padding:40px 0 0 0">
                                      <div style="display:inline-block;width:100%;max-width:520px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:24px;line-height:35px;font-weight:lighter;text-align:center;width:100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" style="padding:0 30px 0 30px;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:24px;line-height:35px;font-weight:lighter">
                                                <textarea name="editor2" id="editor2" contenteditable="true">
                                                  @if($email->editor2)
                                                  {{$email->editor2}}
                                                  @else
                                                  <p style="Margin:0 0 10px 0">Hot This Week</p>
                                                  @endif
                                                </textarea>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" bgcolor="#fafbfc" style="padding:0px 40px 10px 40px">
                                      <div style="display:inline-block;width:100%;max-width:250px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                          <tbody>
                                            <tr>
                                              <td align="center">
                                                <table cellspacing="0" cellpadding="0" border="0" style="width:100%;max-width:250px;display:inline-block;vertical-align:top">
                                                  <tbody>
                                                    <tr>
                                                      <td align="center" style="padding:25px 0 10px 0">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;line-height:19px;color:#888f92;text-align:left;width:250px">
                                                          <tbody>

                                                            <tr>
                                                              <td align="center" style="padding-bottom:20px;font-size:16px;line-height:20px;color:#132431">
                                                                <textarea name="editor3" id="editor3" contenteditable="true">
                                                                  @if($email->editor3)
                                                                  {{$email->editor3}}
                                                                  @else
                                                                <a href="http://bsft.io/x/7f717s?p=1&amp;uid=cef11a58-a319-42ff-90dc-789ce81a4f01&amp;mid=622ce9a3-bcba-4c0b-8f51-037e2909d2aa"
                                                                  style="text-decoration:none;font-size:15px;line-height:20px;color:#132431" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://bsft.io/x/7f717s?p%3D1%26uid%3Dcef11a58-a319-42ff-90dc-789ce81a4f01%26mid%3D622ce9a3-bcba-4c0b-8f51-037e2909d2aa&amp;source=gmail&amp;ust=1550716564131000&amp;usg=AFQjCNHVia_IY4z9nH7qcVqPq8edU7Nu6w">
                                                                  <span
                                                                    style="font-size:22px;line-height:36px">#1</span><br>Deep Learning <br>Nanodegree program</a>
                                                                    @endif
                                                                  </textarea></td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" style="padding-bottom:20px">
                                                                <textarea name="editor10" id="editor3" contenteditable="true">
                                                                  @if($email->editor10)
                                                                  {{$email->editor10}}
                                                                  @else
                                                                  <a href="http://bsft.io/x/7f717s?p=1&amp;uid=cef11a58-a319-42ff-90dc-789ce81a4f01&amp;mid=622ce9a3-bcba-4c0b-8f51-037e2909d2aa" style="text-decoration:none"
                                                                    target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://bsft.io/x/7f717s?p%3D1%26uid%3Dcef11a58-a319-42ff-90dc-789ce81a4f01%26mid%3D622ce9a3-bcba-4c0b-8f51-037e2909d2aa&amp;source=gmail&amp;ust=1550716564131000&amp;usg=AFQjCNHVia_IY4z9nH7qcVqPq8edU7Nu6w">
                                                                    <img
                                                                      alt="" border="0" height="120" src="https://ci4.googleusercontent.com/proxy/xdbxZLYVxpEghMtGEBdh0LZQUW3-IBA2Pv-eorRWDOghij_5bNlgUqcpdg0dwxEEYV-Sneay4ZvePLDUoseDJTfDUvUVqbcE6g0LuOZAM5KWnLk3Hf9iVV91fpCuzvEKtFuZMXSb=s0-d-e1-ft#https://s3-us-west-1.amazonaws.com/udacity-content/degrees/catalog-images/nd101.png"
                                                                      style="display:block;width:229px!important;height:120px!important" width="229" class="CToWUd">
                                                                  </a>
                                                                  @endif
                                                              </textarea>
                                                              </td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" style="padding:0px 0 5px 0">
                                                                <table width="140" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate!important;border-radius:5px;border:1px solid #1fbae8;background-color:#ffffff">
                                                                  <tbody>
                                                                    <tr>
                                                                      <td width="140" height="35" align="center" valign="middle" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:13px;font-weight:bold">
                                                                        <textarea name="editor4" id="editor4" contenteditable="true">
                                                                          @if($email->editor4)
                                                                          {{$email->editor4}}
                                                                          @else
                                                                          <a href=""
                                                                          class="m_-8305897295003843499bottomBtn" style="text-decoration:none;color:#01b3e3;letter-spacing:2px;display:block;padding-top:8px;padding-bottom:8px;font-size:13px">ENROLL&nbsp;NOW</a>
                                                                          @endif
                                                                        </textarea>
                                                                        </td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                              </td>
                                                            </tr>

                                                          </tbody>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <div style="display:inline-block;width:100%;max-width:250px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                          <tbody>
                                            <tr>
                                              <td align="center">
                                                <table cellspacing="0" cellpadding="0" border="0" style="width:100%;max-width:250px;display:inline-block;vertical-align:top">
                                                  <tbody>
                                                    <tr>
                                                      <td align="center" style="padding:25px 0 10px 0">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;font-size:16px;line-height:19px;color:#888f92;text-align:left;width:250px">
                                                          <tbody>

                                                            <tr>
                                                              <td align="center" style="padding-bottom:20px;font-size:16px;line-height:20px;color:#132431">
                                                                <textarea name="editor5" id="editor5" contenteditable="true">
                                                                  @if($email->editor5)
                                                                  {{$email->editor5}}
                                                                  @else
                                                                <a href="http://bsft.io/x/7f717s?p=1&amp;uid=cef11a58-a319-42ff-90dc-789ce81a4f01&amp;mid=622ce9a3-bcba-4c0b-8f51-037e2909d2aa"
                                                                  style="text-decoration:none;font-size:15px;line-height:20px;color:#132431" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://bsft.io/x/7f717s?p%3D1%26uid%3Dcef11a58-a319-42ff-90dc-789ce81a4f01%26mid%3D622ce9a3-bcba-4c0b-8f51-037e2909d2aa&amp;source=gmail&amp;ust=1550716564131000&amp;usg=AFQjCNHVia_IY4z9nH7qcVqPq8edU7Nu6w"><span
                                                                    style="font-size:22px;line-height:36px">#1</span><br>Deep Learning <br>Nanodegree program</a>
                                                                    @endif
                                                                  </textarea></td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" style="padding-bottom:20px">
                                                                <textarea name="editor11" id="editor3" contenteditable="true">
                                                                  @if($email->editor11)
                                                                  {{$email->editor11}}
                                                                  @else
                                                                  <a href="http://bsft.io/x/7f717s?p=1&amp;uid=cef11a58-a319-42ff-90dc-789ce81a4f01&amp;mid=622ce9a3-bcba-4c0b-8f51-037e2909d2aa" style="text-decoration:none"
                                                                    target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://bsft.io/x/7f717s?p%3D1%26uid%3Dcef11a58-a319-42ff-90dc-789ce81a4f01%26mid%3D622ce9a3-bcba-4c0b-8f51-037e2909d2aa&amp;source=gmail&amp;ust=1550716564131000&amp;usg=AFQjCNHVia_IY4z9nH7qcVqPq8edU7Nu6w">
                                                                    <img
                                                                      alt="" border="0" height="120" src="https://ci4.googleusercontent.com/proxy/xdbxZLYVxpEghMtGEBdh0LZQUW3-IBA2Pv-eorRWDOghij_5bNlgUqcpdg0dwxEEYV-Sneay4ZvePLDUoseDJTfDUvUVqbcE6g0LuOZAM5KWnLk3Hf9iVV91fpCuzvEKtFuZMXSb=s0-d-e1-ft#https://s3-us-west-1.amazonaws.com/udacity-content/degrees/catalog-images/nd101.png"
                                                                      style="display:block;width:229px!important;height:120px!important" width="229" class="CToWUd">
                                                                  </a>
                                                                  @endif
                                                              </textarea>
                                                              </td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" style="padding:0px 0 5px 0">
                                                                <table width="140" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate!important;border-radius:5px;border:1px solid #1fbae8;background-color:#ffffff">
                                                                  <tbody>
                                                                    <tr>
                                                                      <td width="140" height="35" align="center" valign="middle" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:13px;font-weight:bold">
                                                                        <textarea name="editor6" id="editor6" contenteditable="true">
                                                                          @if($email->editor6)
                                                                          {{$email->editor6}}
                                                                          @else
                                                                          <a href=""
                                                                          class="m_-8305897295003843499bottomBtn" style="text-decoration:none;color:#01b3e3;letter-spacing:2px;display:block;padding-top:8px;padding-bottom:8px;font-size:13px">ENROLL&nbsp;NOW</a>
                                                                          @endif
                                                                        </textarea>
                                                                        </td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                              </td>
                                                            </tr>

                                                          </tbody>
                                                        </table>
                                                      </td>
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

                                  <tr>
                                    <td align="center" style="padding:30px 0 0 0">
                                      <div style="display:inline-block;width:100%;max-width:520px">
                                        <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:24px;line-height:35px;font-weight:lighter;color:#192e3c;text-align:center;width:100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" style="padding:0 30px 0 30px;color:#192e3c;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:24px;line-height:35px;font-weight:lighter">
                                                <p style="Margin:5px 0 10px 0">Le parcours du moment</p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" style="padding:20px 40px 20px 40px">
                                      <div style="display:inline-block;width:100%;max-width:235px;vertical-align:top">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                          <tbody>
                                            <tr>
                                              <td align="center" style="padding-bottom:20px">
                                                <table border="0" cellpadding="0" cellspacing="0" style="width:180px">
                                                  <tbody>
                                                    <tr>
                                                      <td align="center" valign="top" style="padding:25px 0;background-color:#fafbfc;border:1px solid #e4e9ed">
                                                        <textarea contenteditable="true" name="editor7" id="editor7">
                                                          @if($email->editor7)
                                                          {{$email->editor7}}
                                                          @else
                                                        <a href=""
                                                          style="text-decoration:none;color:#00afe1">
                                                          <img
                                                            alt="" src="https://ci5.googleusercontent.com/proxy/Qd7QW3LDYgw5N-ymAXgTin6mWfQda45wRYtt3S_wOX5LcR6Aqf9CYTyaGakg6vhq_tOupSZO1IGw57GreSXhgjClt52XVsjP62vHwl3DSYxDNL_Vgw4b-v_JT5GyRGc4L9Sv_S85=s0-d-e1-ft#https://s3-us-west-1.amazonaws.com/udacity-content/degrees/catalog-images/nd019.png"
                                                            style="display:block;width:180px!important" width="180" border="0" class="CToWUd"></a>
                                                            @endif
                                                            </textarea>
                                                          </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <div class="m_-8305897295003843499des-tal" style="display:inline-block;width:100%;max-width:276px;vertical-align:top">
                                        <table border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-size:14px;line-height:24px;color:#525c65;width:100%">
                                          <tbody>
                                            <tr>
                                              <td valign="top">
                                                <textarea contenteditable="true" name="editor8" id="editor8">
                                                  @if($email->editor8)
                                                  {{$email->editor8}}
                                                  @else
                                                <p style="Margin:0 0 10px 0;font-size:16px;line-height:20px;color:#102231">React Nanodegree</p>
                                                @endif
                                              </textarea>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td valign="top" width="200" style="padding:10px 0px 25px 0px">
                                                <div class="m_-8305897295003843499des-tal m_-8305897295003843499mobile-block-center">
                                                  <table width="200" border="0" cellspacing="0" cellpadding="0" style="background-color:#00afe1;border-radius:4px;border-collapse:separate!important">
                                                    <tbody>
                                                      <tr>
                                                        <td width="200" height="46" valign="middle" style="font-size:13px;font-family:'Open+Sans','Open Sans',Helvetica,Arial,sans-serif;font-weight:semibold;text-align:center">
                                                          <textarea contenteditable="true" name="editor9" id="editor9">
                                                            @if($email->editor9)
                                                            {{$email->editor9}}
                                                            @else
                                                          <a href=""
                                                            style="text-decoration:none;color:#ffffff;letter-spacing:2px;display:block;padding-top:10px;padding-bottom:10px">ENROLL&nbsp;NOW</a>
                                                            @endif
                                                          </textarea>
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
                    <td align="center" style="padding:0">
                      <div style="display:inline-block;width:100%;max-width:520px;vertical-align:top">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                          <tbody>
                            <tr>
                              <td align="center" style="padding:30px 0;border-bottom:1px solid #e5ebef">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:265px">
                                  <tbody>
                                    <tr>
                                      <td align="center" style="padding:0px 10px"><a href=""><img
                                            alt="IOS" border="0" height="44" src="https://ci6.googleusercontent.com/proxy/idlfJpK2BUW6-33QNx3_68ErV5yheHtRh6VggS4GTQ87bCsfDtXY7v90xG7SNpeUEBsfqwVlHlphH5H8ZFwEKEY6DY8RXwlWmOxt7QF-PzMoIiXGCxk=s0-d-e1-ft#https://s3-us-west-2.amazonaws.com/udacity-email/Footer/ios-btn.gif"
                                            style="display:block;width:120px!important" width="120" class="CToWUd"></a></td>
                                      <td align="center" style="padding:0px 10px"><a href=""><img
                                            alt="Android" border="0" height="44" src="https://ci3.googleusercontent.com/proxy/8nh6nFCBEPsuABOns_CTZ2-JO9RRYOs2brb_iVmYwxBapIGeDR4pMsPDjVHPxpd8mCn8vBT_7mU22KpjXHgvwFN9v3noun7fUyL9WjdaZHUvFOSDDPRUz3TM=s0-d-e1-ft#https://s3-us-west-2.amazonaws.com/udacity-email/Footer/android-btn.gif"
                                            style="display:block;width:120px!important" width="120" class="CToWUd"></a></td>
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

<script>

CKEDITOR.inline( 'editor4', {

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

CKEDITOR.inline( 'editor5', {

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

CKEDITOR.inline( 'editor6', {

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

CKEDITOR.inline( 'editor7', {

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

CKEDITOR.inline( 'editor8', {

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

CKEDITOR.inline( 'editor9', {

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

CKEDITOR.inline( 'editor10', {

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



CKEDITOR.inline( 'editor11', {

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


CKEDITOR.inline( 'editor12', {

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


CKEDITOR.inline( 'editor13', {

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


CKEDITOR.inline( 'editor14', {

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


CKEDITOR.inline( 'editor15', {

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
