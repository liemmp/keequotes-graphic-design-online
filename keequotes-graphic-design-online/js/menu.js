//Background
$(".mau-solid").on('click', function(e){
    $("#mau-solid").show(300);
    $(".photodirbackground").hide(100);
});
$(".mau-gradient").on('click', function(e){
    $("#mau-gradient").show(300);
    $(".photodirbackground").hide(100);
});
$(".otherbackground").on('click', function(e){
    $("#otherbackground").show(300);
    $(".photodirbackground").hide(100);
});
$(".patternbackground").on('click', function(e){
    $("#patternbackground").show(300);
    $(".photodirbackground").hide(100);
});

$(".photodirbackground-back").on('click', function(e){
    $(".photodirbackground").show(300);
    $("#contentajax-backgroundcolor").hide(100);
    $("#contentajax-background").hide(100);
    $("#mau-solid").hide(100);
    $("#mau-gradient").hide(100);
    $("#otherbackground").hide(100);
    $("#patternbackground").hide(100);
});

$(".photodirbackgroundcolorback").on('click', function(e){
    $("#mau-solid").show(300);
    $("#contentajax-backgroundcolor").hide(100);
    $(".photodirbackgroundcolorback").hide(100);
});

$(".photodirbackgroundgradientback").on('click', function(e){
    $("#mau-gradient").show(300);
    $("#contentajax-backgroundgradient").hide(100);
    $(".photodirbackgroundgradientback").hide(100);
});

$(".photodirbackgroundpatternback").on('click', function(e){
    $("#patternbackground").show(300);
    $("#contentajax-backgroundpattern").hide(100);
    $(".photodirbackgroundpatternback").hide(100);
});

$(".photodirbackgroundotherback").on('click', function(e){
    $("#otherbackground").show(300);
    $("#contentajax-backgroundother").hide(100);
    $(".photodirbackgroundotherback").hide(100);
});

$(".con-nguoi").on('click', function(e){
    $("#con-nguoi").show(300);
    $(".photodirphoto").hide(100);
});

$(".do-vat").on('click', function(e){
    $("#do-vat").show(300);
    $(".photodirphoto").hide(100);
});

$(".dong-vat").on('click', function(e){
    $("#dong-vat").show(300);
    $(".photodirphoto").hide(100);
});

$(".thien-nhien").on('click', function(e){
    $("#thien-nhien").show(300);
    $(".photodirphoto").hide(100);
});

$(".thuc-an").on('click', function(e){
    $("#thuc-an").show(300);
    $(".photodirphoto").hide(100);
});

$(".photodir-back").on('click', function(e){
    $(".photodirphoto").show(300);
    $("#con-nguoi").hide(100);
    $("#do-vat").hide(100);
    $("#dong-vat").hide(100);
    $("#thien-nhien").hide(100);
    $("#thuc-an").hide(100);
});

$(".photodir-elementback").on('click', function(e){
    $(".photodir-element").show(300);
    $("#vector-simple").hide(100);
    $("#vector-comflex").hide(100);
    $("#transparentelements").hide(100);
});

$(".photodirvectorsimple-back").on('click', function(e){
    $("#vector-simple").show(300);
    $("#contentajax-vectorsimple").hide(100);
    $(".photodirvectorsimple-back").hide(100);
});

$(".photodirvectorcomflex-back").on('click', function(e){
    $("#vector-comflex").show(300);
    $("#contentajax-vectorcomflex").hide(100);
    $(".photodirvectorcomflex-back").hide(100);
});

$(".photodirtransparentelements-back").on('click', function(e){
    $("#transparentelements").show(300);
    $("#contentajax-transparentelements").hide(100);
    $(".photodirtransparentelements-back").hide(100);
});

$(".photodirphotoconnguoi-back").on('click', function(e){
    $("#contentajax-photoconnguoi").hide(100);
    $("#con-nguoi").show(300);
    $(".photodirphotoconnguoi-back").hide(100);
});

$(".photodirphotodovat-back").on('click', function(e){
    $("#contentajax-photodovat").hide(100);
    $("#do-vat").show(300);
    $(".photodirphotodovat-back").hide(100);
});

$(".photodirphotodongvat-back").on('click', function(e){
    $("#contentajax-photodongvat").hide(100);
    $("#dong-vat").show(300);
    $(".photodirphotodongvat-back").hide(100);
});

$(".photodirphotothiennhien-back").on('click', function(e){
    $("#contentajax-photothiennhien").hide(100);
    $("#thien-nhien").show(300);
    $(".photodirphotothiennhien-back").hide(100);
});

$(".photodirphotothucan-back").on('click', function(e){
    $("#contentajax-photothucan").hide(100);
    $("#thuc-an").show(300);
    $(".photodirphotothucan-back").hide(100);
});

$(".photodirtextballoon-back").on('click', function(e){
    $("#contentajax-textballoon").hide(100);
    $("#textballoon").show(300);
    $(".photodirtextballoon-back").hide(100);
});

$(".photodirtexteffect-back").on('click', function(e){
    $("#contentajax-texteffect").hide(100);
    $("#texteffect").show(300);
    $(".photodirtexteffect-back").hide(100);
});

$(".photodireditabletext-back").on('click', function(e){
    $("#contentajax-editabletext").hide(100);
    $("#editabletext").show(300);
    $(".photodireditabletext-back").hide(100);
});

$(".photodirnoneditabletext-back").on('click', function(e){
    $("#contentajax-noneditabletext").hide(100);
    $("#noneditabletext").show(300);
    $(".photodirnoneditabletext-back").hide(100);
});

$(".photodirphotounsplashconnguoi-back").on('click', function(e){
    $(".allphotos").hide(100);
    $("#con-nguoi").show(300);
    $(".photodirphotounsplashconnguoi-back").hide();
});

$(".transparentelements").on('click', function(e){
    $("#transparentelements").show(300);
    $(".photodir-element").hide(100);
});

$(".vector-simple").on('click', function(e){
    $("#vector-simple").show(300);
    $(".photodir-element").hide(100);
});

$(".vector-comflex").on('click', function(e){
    $("#vector-comflex").show(300);
    $(".photodir-element").hide(100);
});

$(".textballoon").on('click', function(e){
    $("#textballoon").show(300);
    $(".photodir-text").hide(100);
});

$(".texteffect").on('click', function(e){
    $("#texteffect").show(300);
    $(".photodir-text").hide(100);
});

$(".noneditabletext").on('click', function(e){
    $("#noneditabletext").show(300);
    $(".photodir-text").hide(100);
});

$(".editabletext").on('click', function(e){
    $("#editabletext").show(300);
    $(".photodir-text").hide(100);
});

$(".templatelogo").on('click', function(e){
    $("#templatelogo").show(300);
    $(".photodir-logo").hide(100);
});

$(".photodirtext-back").on('click', function(e){
    $(".photodir-text").show(300);
    $("#textballoon").hide(100);
    $("#texteffect").hide(100);
    $("#noneditabletext").hide(100);
    $("#editabletext").hide(100);
});

$(".canvascontent").on('click', function(e){
    if($(e.target).closest('.canvas-container').length > 0) return;
    $(".general-function").show(100);
    $(".image-function").hide(100);
    $(".text-function").hide(100);
    $(".detail-function").hide(100);
    $(".delete-color-function").hide(100);
    $(".color-function").hide(100);
    $(".group-function").hide(100);
    $(".tools-details").hide(100);
    $(".tools-fonts").hide(100);
    $(".tools-colors").hide(100);
    $(".tools-fonts-details").hide(100);
    $(".tools-fonts-style").hide(100);
    $(".tools-fonts-effect").hide();
    var activeObject = mainCanvas.getActiveObject(),
        activeGroup = mainCanvas.getActiveGroup();
    if (activeObject) {
        mainCanvas.discardActiveObject();
        mainCanvas.renderAll();
    }
    else if (activeGroup) {
        mainCanvas.discardActiveGroup();
        mainCanvas.renderAll();
    }
});

document.getElementById("resize").addEventListener("click", function(e) {
    let width = setting.json_active.width;
    let height = setting.json_active.height;
    $('#canvaswidth').val(width);
    $('#canvasheight').val(height);
    $(".overlayresize").show(300);
});
document.getElementById("align").addEventListener("click", function(e) {
    $(".tools-details").show();
    $(".align-function").show(300);
    $(".arrange-function").hide();
    $(".tools-fonts").hide();
    $(".fonts-function").hide();
    $(".tools-fonts-style").hide();
    $(".tools-fonts-details").hide();
    $(".tools-colors").hide();
});
document.getElementById("arrange").addEventListener("click", function(e) {
    $(".tools-details").show();
    $(".arrange-function").show(300);
    $(".align-function").hide();
    $(".tools-fonts").hide();
    $(".fonts-function").hide();
    $(".tools-fonts-style").hide();
    $(".tools-fonts-details").hide();
    $(".tools-colors").hide();
});
document.getElementById("textfont").addEventListener("click", function(e) {
    $(".tools-fonts").show(300);
    $(".fonts-function").show(300);
    $(".tools-details").hide();
    $(".arrange-function").hide();
    $(".align-function").hide();
    $(".tools-fonts-details").hide();
    $(".tools-fonts-style").hide();
    $(".tools-colors").hide();
});
document.getElementById("textsize").addEventListener("click", function(e) {
    $(".fonts-function").show(300);
    $(".tools-fonts").hide();
    $(".tools-details").hide();
    $(".arrange-function").hide();
    $(".align-function").hide();
    $(".tools-fonts-details").show(300);
    $(".tools-fonts-style").hide();
    $(".tools-colors").hide();
});
document.getElementById("textstyle").addEventListener("click", function(e) {
    $(".tools-fonts-style").show(300);
    $(".textstyle").show();
    $(".fonts-function").hide();
    $(".tools-fonts").hide();
    $(".tools-details").hide();
    $(".arrange-function").hide();
    $(".align-function").hide();
    $(".textcase").hide();
    $(".textalign").hide();
    $(".tools-fonts-details").hide();
    $(".tools-colors").hide();
});
document.getElementById("texteffects").addEventListener("click", function(e) {
    $(".fonts-function").hide();
    $(".tools-fonts").hide();
    $(".tools-details").hide();
    $(".arrange-function").hide();
    $(".align-function").hide();
    $(".tools-fonts-style").show(300);
    $(".textstyle").hide();
    $(".texteffect").show(300);
    $(".textalign").hide();
    $(".tools-fonts-details").hide();
    $(".tools-colors").hide();
});
document.getElementById("textalign").addEventListener("click", function(e) {
    $(".fonts-function").hide();
    $(".tools-fonts").hide();
    $(".tools-details").hide();
    $(".arrange-function").hide();
    $(".align-function").hide();
    $(".tools-fonts-style").show(300);
    $(".textstyle").hide();
    $(".textcase").hide();
    $(".textalign").show(300);
    $(".texteffect").hide();
    $(".tools-fonts-details").hide();
    $(".tools-colors").hide();
});
document.getElementById("color").addEventListener("click", function(e) {
    $(".tools-colors").show(300);
    $(".color-function").show(300);
    $(".tools-fonts").hide();
    $(".tools-details").hide();
    $(".arrange-function").hide();
    $(".align-function").hide();
    $(".tools-fonts-details").hide();
    $(".tools-fonts-style").hide();
});
/// part 2
$('.control_main [data-product="demo"]').click();
function show_element_cat(event){
let id= $(event).attr('data-id');
$('#element .sidebarpost > div').hide(100);
$('#'+id).show(300);
}
function back_step(turn_off,turn_on){
  $(turn_off).hide();
  $(turn_on).show();
}

function filters_templates_cat(cat){
    $('.list_categories > .item_cat').removeClass('active');
    $('.list_categories > .item_cat[data-type="'+cat+'"]').addClass('active');
   document.querySelectorAll('.display-products .masonry .brick[product_category_id]').forEach(item=>{
       let c = item.getAttribute('product_category_id');
       if(c == cat || cat ==0){
           item.classList.remove('k-none');
       }else{
           item.classList.add('k-none');
       }

   })
}