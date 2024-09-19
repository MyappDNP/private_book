const form_risk_report = document.querySelector("#form_risk_report");
document.addEventListener("DOMContentLoaded", function (e) {
    {
        form_risk_report && FormValidation.formValidation(form_risk_report, {
            fields: {
                ddl_pta_code: {
                    validators: {
                        notEmpty: {
                            message: "กรุณาเลือกหน่วยงาน"
                        },
                    }
                },
                txt_riskreportdate: {
                    validators: {
                        notEmpty: {
                            message: "กรุณากรอกวันที่เกิดอุบัติเหตุ/ภัยพิบัติ"
                        },
                    }
                },
                txt_riskreportplace: {
                    validators: {
                        notEmpty: {
                            message: "กรุณากรอกสถานที่เกิดอุบัติเหตุ/ภัยพิบัติ"
                        },
                    }
                },
                txt_riskreportdesc: {
                    validators: {
                        notEmpty: {
                            message: "กรุณากรอกรายละเอียดอุบัติเหตุ/ภัยพิบัติ"
                        },
                    }
                },
                txt_x: {
                    validators: {
                        numeric: {
                            message: "กรุณากรอกพิกัด ละติจูด เหนือ ให้ถูกต้อง"
                        },
                    }
                },
                txt_y: {
                    validators: {
                        numeric: {
                            message: "กรุณากรอกพิกัด ลองจิจูด ตะวันออก ให้ถูกต้อง"
                        },
                    }
                },
                ddl_accidenttypeid: {
                    validators: {
                        notEmpty: {
                            message: "กรุณาเลือกประเภทของอุบัติเหตุ/ภัยพิบัติ"
                        },
                    }
                },
                rdo_riskreportalgohol: {
                    validators: {
                        notEmpty: {
                            message: "กรุณาเลือกความเกี่ยวพันกับเครื่องดื่มแอลกอฮอล์"
                        },
                    }
                },
                txt_riskreportinjureminor: {
                    validators: {
                        integer: {
                            message: "กรุณากรอกเป็นตัวเลข"
                        },
                    }
                },
                txt_riskreportinjurebad: {
                    validators: {
                        integer: {
                            message: "กรุณากรอกเป็นตัวเลข"
                        },
                    }
                },
                txt_riskreportdeath: {
                    validators: {
                        integer: {
                            message: "กรุณากรอกเป็นตัวเลข"
                        },
                    }
                },
                txt_riskreportcost: {
                    validators: {
                        numeric: {
                            message: "กรุณากรอกเป็นตัวเลข"
                        },
                    }
                },
                txt_riskreportperson: {
                    validators: {
                        notEmpty: {
                            message: "กรุณากรอกผู้แจ้งและเบอร์ติดต่อ"
                        },
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    eleValidClass: "",
                    rowSelector: ".mb-3"
                }),
                submitButton: new FormValidation.plugins.SubmitButton,
                defaultSubmit: new FormValidation.plugins.DefaultSubmit,
                autoFocus: new FormValidation.plugins.AutoFocus
            },
            init: e => {
                e.on("plugins.message.placed", function (e) {
                    e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
                })
            }
        });
        // const t = document.querySelectorAll(".numeral-mask");
        // return void (t.length && t.forEach(e => {
        //     new Cleave(e, {
        //         numeral: !0
        //     })
        // }))
    }
}), $(function () {
    var modal = $("#myModal");
    var modalImg = $("#img01");
    var span_close = $(".close")[0];

    set_text_date("txt_riskreportdate");

    $("#txt_riskreportdate").unbind("mousewheel");

    $('.img_risk').click(function () {
        modal.css("display", "block");
        modalImg.attr('src', $(this).attr('src_large'));
    });

    if (span_close !== undefined) {
        span_close.onclick = function () {
            modal.css("display", "none");
        }
    }

    $('#btn_risk_pic_add').click(function () {
        var card_add = $("#card_risk_pic_add").clone();
        onChangeUpload(card_add);
    });

    $('#btn_search').click(function () {
        window.location = url_search();
    });
});

function set_txt_date_picker(id) {
    window.Litepicker && (new Litepicker({
        element: document.getElementById(id),
        format: 'DD/MM/YYYY',
    }));
}

function delete_pic(card_id, pic_id) {
    $("#" + card_id).remove();
    if (pic_id != "") {
        var del_id = $("#hid_delete_pic").val();
        if (del_id != "") del_id += ",";
        del_id += pic_id;
        $("#hid_delete_pic").val(del_id);
    }
}

function onChangeUpload(card_add) {
    var upload_file = card_add.find("input[name='uploadfile[]']");

    upload_file.click();

    $(upload_file).change(function () {
        checkFormFile(this, card_add);
    });
}

function checkFormFile(elm, card_add) {
    var result = true;
    var elm2 = $(elm);
    var value = elm2.val();
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    var filename = value.match(/[^\\/]*$/)[0]; // remove C:\fakename

    if (!allowedExtensions.exec(filename)) {
        result = false;
        elm2.val("");
        $("#lbl_error_risk_pic_add").text("อัพโหลดเฉพาะ รูปภาพ เท่านั้น");
        $("#row_error_risk_pic_add").removeAttr("hidden");
        //modal_alert("อัพโหลดรูปภาพ","แนบไฟล์เฉพาะ รูปภาพ เท่านั้น");
    }
    else if (elm.files[0].size > 5242880) {
        result = false;
        elm2.val("");
        $("#lbl_error_risk_pic_add").text("ขนาดไฟล์จะต้องไม่เกิน 5 MB.");
        $("#row_error_risk_pic_add").removeAttr("hidden");
        // modal_alert("อัพโหลดรูปภาพ","ขนาดไฟล์จะต้องไม่เกิน 5 MB.");
    } else {
        $("#row_error_risk_pic_add").attr("hidden", "hidden");

        var count_img = $(".img_risk").length;
        if (count_img <= 3) {
            var btn_del = card_add.find("#btn_del");

            card_add.find(".img_risk").attr("src", URL.createObjectURL(elm.files[0]));

            card_add.attr('id', Date.now());
            card_add.removeAttr('hidden');

            btn_del.attr('href', "javascript:delete_pic('" + card_add.attr("id") + "','');");

            card_add.appendTo($('#row_risk_pic'));
        } else {
            result = false;
            elm2.val("");
            $("#lbl_error_risk_pic_add").text("แนบรูปภาพได้ไม่เกิน 3 รูป");
            $("#row_error_risk_pic_add").removeAttr("hidden");
        }

    }

}
