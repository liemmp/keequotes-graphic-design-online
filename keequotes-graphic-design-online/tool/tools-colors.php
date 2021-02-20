<div class="tool-icon">
    <div class="scrollmenu" id="changecolor">
    </div>
</div>
<script>
    document.querySelectorAll('#changecolor .colorchart > div').forEach(item=> {
            item.addEventListener('click', () => {
                const style = getComputedStyle(item);
                const color = style.backgroundColor;
                console.log(color);
                var activeObject = mainCanvas.getActiveObject(),
                    activeGroup = mainCanvas.getActiveGroup();
                if (activeObject) {
                    activeObject.setFill(color);
                    mainCanvas.renderAll();
                } else if (activeGroup) {
                    var objectsInGroup = activeGroup.getObjects();

                    objectsInGroup.forEach(function (object) {
                        object.setFill(color);
                        mainCanvas.renderAll();
                    });
                }
            });
        }

    );
    function priceresult() {
        var val = document.getElementById("colorpostid").value;
        $.ajax({
            type: "post", //Phương thức truyền post hoặc get
            dataType: "html", //Dạng dữ liệu trả về xml, json, script, or html
            url: '/wp-admin/admin-ajax.php', // Nơi xử lý dữ liệu
            data: {
                action: "colorchart", //Tên action, dữ liệu gởi lên cho server
                whatever: val
            },
            beforeSend: function () {
                $('.ajax-loader-color').css("display", "block");
            },
            success: function (response) {
                $('.ajax-loader-color').css("display", "none");
                $('.colorchart').css("display", "block");
                $('.colorchart').html(response);
            }
        });
    }
</script>