var $address = $("#address");
var $message = $("#message");
var $continue = $("#continue");

function selectAddress(suggestion) {
    console.log(suggestion);
    $("#city").val(suggestion.data.city);
    $("#city_type").val(suggestion.data.city_type);
    $("#street").val(suggestion.data.street);
    $("#street_type").val(suggestion.data.street_type);
    $("#house").val(suggestion.data.house);
    $("#house_type").val(suggestion.data.house_type);
    $("#block").val(suggestion.data.block);
    $("#block_type").val(suggestion.data.block_type);
    $("#geo_lat").val(suggestion.data.geo_lat);
    $("#geo_lon").val(suggestion.data.geo_lon);
    if (suggestion.data.house && !suggestion.data.flat) {
        $message.text("Отлично, можно продолжать!");
        $continue.prop("disabled", false);
    } else {
        $message.text("Укажите адрес до дома, чтобы продолжить");
        $continue.prop("disabled", true);
    }
    selectedAddress = suggestion.data;
}

function selectNone() {
    selectedAddress = null;
    $message.text("Вы не ввели адрес");
    $continue.prop("disabled", true);
}

$("#address").suggestions({
    token: "9494b7f6b2acd0375d1c592e356297ebcf4b730d",
    type: "ADDRESS",
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: selectAddress,
    onSelectNothing: selectNone,
});
