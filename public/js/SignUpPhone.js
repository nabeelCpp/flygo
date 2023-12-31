var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 47,
    freeMode: true,
    loop:true,
    cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    mousewheel: true,
    keyboard: true,
  });




  // International telephone format
// $("#phone").intlTelInput();
// get the country data from the plugin
var countryData = window.intlTelInputGlobals.getCountryData(),
input = document.querySelector("#phone1"),
addressDropdown = document.querySelector("#address-country");

// init plugin
var iti = window.intlTelInput(input, {
hiddenInput: "full_phone",
utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
});

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
var country = countryData[i];
var optionNode = document.createElement("option");
optionNode.value = country.iso2;
var textNode = document.createTextNode(country.name);
optionNode.appendChild(textNode);
addressDropdown.appendChild(optionNode);
}
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
addressDropdown.value = iti.getSelectedCountryData().iso2;
});

// listen to the address dropdown for changes
addressDropdown.addEventListener('change', function() {
iti.setCountry(this.value);
});



//OTP script////////////////////

