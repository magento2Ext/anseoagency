<?php
$url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/others/browser-resizer/'); 
?>
<style>
    .option-box{
        width: 100%;
        float: left;
    }

    .option-box p{
        width: 300px;
        float: left;
        cursor: pointer
    }
    .accordion-section-title{
        font-size: 25px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   
                                <h2>Your Website</h2>
                                <div class="website-url-bar homo_input">
                                    <input type="text" id="website-url" aria-label="Enter your responsive website URL" placeholder="Enter Your Website URL" field-name="" validation="mandatory-check,url-check" class="valid-field">
                                </div>
                                <div class="ottn-slctn-sec homo_input">
                                    <div id="tg-1" class="toggle-switch" knob="tg-knob" arial-label="change orientation between portrait and landscape" tabindex="0">
                                        <div id="tg-knob" class="toggle-switch-knob">
                                            <select class="form-control select">
                                                <option value="port"><span>Portrait</span></option>
                                                <option value="land"><span >Landscape</span></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-section">
                                        <div id="accordion-title-4" class="accordion-section-title accordion-section-title-active" sectionid="accordion-4" knobid="accordion-knob-4" arial-label="select custom resolution" tabindex="0">
                                            <div class="accordion-title-label" style="display:inline-block;">Custom</div>

                                        </div>
                                        <div id="accordion-4" class="accordion-section-content accordion-section-content-open">
                                            <div class="option-box" dw="360" dh="640" tabindex="0" >
                                                <p class="pvpt-cor">360 x 640</p>
                                                <p class="lvpt-cor hid-cor">640 x 360</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="667" tabindex="0">
                                                <p class="pvpt-cor">375 x 667</p>
                                                <p class="lvpt-cor hid-cor">667 x 375</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="800" tabindex="0">
                                                <p class="pvpt-cor">1280 x 800</p>
                                                <p class="lvpt-cor hid-cor">800 x 1280</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="1024" tabindex="0">
                                                <p class="pvpt-cor">1280 x 1024</p>
                                                <p class="lvpt-cor hid-cor">1024 x 1280</p>
                                            </div>
                                            <div class="option-box" dw="1366" dh="768" tabindex="0">
                                                <p class="pvpt-cor">1366 x 768</p>
                                                <p class="lvpt-cor hid-cor">768 x 1366</p>
                                            </div>
                                            <div class="option-box" dw="1440" dh="900" tabindex="0">
                                                <p class="pvpt-cor">1440 x 900</p>
                                                <p class="lvpt-cor hid-cor">900 x 1440</p>
                                            </div>
                                            <div class="option-box" dw="1600" dh="900" tabindex="0">
                                                <p class="pvpt-cor">1600 x 900</p>
                                                <p class="lvpt-cor hid-cor">900 x 1600</p>
                                            </div>
                                            <div class="option-box" dw="1920" dh="1080" tabindex="0">
                                                <p class="pvpt-cor">1920 x 1080</p>
                                                <p class="lvpt-cor hid-cor">1080 x 1920</p>
                                            </div>
                                            <div class="custom-option-wrapper">
                                                <input id="width-input" aria-label="Enter viewport width" name="Width" class="custom-input" type="text" field-name="Width" validation="positive-number-check">
                                                <input id="height-input" aria-label="Enter viewport height" name="Height" class="custom-input" type="text" field-name="Height" validation="positive-number-check">
                                                <button id="openPopup_btn" type="button" class="btn-short" aria-label="Open Popup">GO</button>
                                            </div>
                                        </div>
                                        <span class="validation-error" id="width-input-err" role="alert"></span>
                                        <span class="validation-error" id="height-input-err" role="alert"></span>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-section">
                                        <div id="accordion-title-1" class="accordion-section-title" sectionid="accordion-1" knobid="accordion-knob-1" arial-level="mobile device resolutions" tabindex="0">
                                            <div class="accordion-title-label" style="display:inline-block;">Mobile</div>

                                        </div>
                                        <div id="accordion-1" class="accordion-section-content">
                                            <div class="option-box" dw="414" dh="896">
                                                <p class="pvpt-cor">iPhone 11 Pro Max (414x896)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 11 Pro Max (896x414)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="812">
                                                <p class="pvpt-cor">iPhone 11 Pro (375x812)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 11 Pro (812x375)</p>
                                            </div>
                                            <div class="option-box" dw="414" dh="896">
                                                <p class="pvpt-cor">iPhone 11 (414x896)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 11 (896x414)</p>
                                            </div>
                                            <div class="option-box" dw="414" dh="896">
                                                <p class="pvpt-cor">iPhone XR (414x896)</p>
                                                <p class="lvpt-cor hid-cor">iPhone XR (896x414)</p>
                                            </div>
                                            <div class="option-box" dw="414" dh="896">
                                                <p class="pvpt-cor">iPhone XS Max (414x896)</p>
                                                <p class="lvpt-cor hid-cor">iPhone XS Max (896x414)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="812">
                                                <p class="pvpt-cor">iPhone XS (375x812)</p>
                                                <p class="lvpt-cor hid-cor">iPhone XS (812x375)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="812">
                                                <p class="pvpt-cor">iPhone X (375x812)</p>
                                                <p class="lvpt-cor hid-cor">iPhone X (812x375)</p>
                                            </div>
                                            <div class="option-box" dw="414" dh="736">
                                                <p class="pvpt-cor">iPhone 8 Plus (414x736)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 8 Plus (736x414)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="667">
                                                <p class="pvpt-cor">iPhone 8 (375x667)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 8 (667x375)</p>
                                            </div>
                                            <div class="option-box" dw="414" dh="736">
                                                <p class="pvpt-cor">iPhone 7 Plus (414x736)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 7 Plus (736x414)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="667">
                                                <p class="pvpt-cor">iPhone 7 (375x667)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 7 (667x375)</p>
                                            </div>
                                            <div class="option-box" dw="414" dh="736">
                                                <p class="pvpt-cor">iPhone 6S Plus (414x736)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 6S Plus (736x414)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="667">
                                                <p class="pvpt-cor">iPhone 6S (375x667)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 6S (667x375)</p>
                                            </div>
                                            <div class="option-box" dw="375" dh="667">
                                                <p class="pvpt-cor">iPhone 6 (375x667)</p>
                                                <p class="lvpt-cor hid-cor">iPhone 6 (667x375)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="760">
                                                <p class="pvpt-cor">Galaxy Note 10 Plus (360x760)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy Note 10 Plus (760x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="740">
                                                <p class="pvpt-cor">Galaxy Note 9 (360x740)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy Note 9 (740x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="800">
                                                <p class="pvpt-cor">Galaxy S10 Plus (360x800)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S10 Plus (800x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="760">
                                                <p class="pvpt-cor">Galaxy S10 E (360x760)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S10 E (760x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="800">
                                                <p class="pvpt-cor">Galaxy S10 (360x800)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S10 (800x360)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="846">
                                                <p class="pvpt-cor">Galaxy S9 Plus (412x846)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S9 Plus (846x412)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="740">
                                                <p class="pvpt-cor">Galaxy S9 (360x740)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S9 (740x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="740">
                                                <p class="pvpt-cor">Galaxy Note 8 (360x740)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy Note 8 (740x360)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="846">
                                                <p class="pvpt-cor">Galaxy S8 Plus (412x846)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S8 Plus (846x412)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="740">
                                                <p class="pvpt-cor">Galaxy S8 (360x740)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S8 (740x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Galaxy S7 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S7 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Galaxy S7 Edge (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy S7 Edge (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Galaxy J3 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy J3 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="827">
                                                <p class="pvpt-cor">Pixel 3 XL (412x827)</p>
                                                <p class="lvpt-cor hid-cor">Pixel 3 XL (827x412)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="824">
                                                <p class="pvpt-cor">Pixel 3 (412x824)</p>
                                                <p class="lvpt-cor hid-cor">Pixel 3 (824x412)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="640">
                                                <p class="pvpt-cor">Pixel 2 (412x640)</p>
                                                <p class="lvpt-cor hid-cor">Pixel 2 (640x412)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="823">
                                                <p class="pvpt-cor">Pixel 2 XL (412x823)</p>
                                                <p class="lvpt-cor hid-cor">Pixel 2 XL (823x412)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Pixel (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Pixel (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="411" dh="731">
                                                <p class="pvpt-cor">Pixel XL (411x731)</p>
                                                <p class="lvpt-cor hid-cor">Pixel XL (731x411)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Nexus 6 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Nexus 6 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="412" dh="738">
                                                <p class="pvpt-cor">Nexus 6P (412x738)</p>
                                                <p class="lvpt-cor hid-cor">Nexus 6P (738x412)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Nexus 5 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Nexus 5 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">LG K20 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">LG K20 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">LG Tribute HD (360x640)</p>
                                                <p class="lvpt-cor hid-cor">LG Tribute HD (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">LG Aristo 2 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">LG Aristo 2 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">LG Stylo 2 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">LG Stylo 2 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">LG V20 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">LG V20 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">LG K10 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">LG K10 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="320" dh="570">
                                                <p class="pvpt-cor">LG K7 (320x570)</p>
                                                <p class="lvpt-cor hid-cor">LG K7 (570x320)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="760">
                                                <p class="pvpt-cor">Huawei P20 Lite (360x760)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P20 Lite (760x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="747">
                                                <p class="pvpt-cor">Huawei P20 Pro (360x747)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P20 Pro (747x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="748">
                                                <p class="pvpt-cor">Huawei P20 (360x748)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P20 (748x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Huawei P10 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P10 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Huawei P10 Lite (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P10 Lite (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Huawei P9 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P9 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Huawei P9 Lite (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P9 Lite (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Huawei P8 Lite (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Huawei P8 Lite (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Moto Z (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Moto Z (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Moto E4 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Moto E4 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Moto Z2 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Moto Z2 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">DROID Turbo (360x640)</p>
                                                <p class="lvpt-cor hid-cor">DROID Turbo (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Moto Z Play (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Moto Z Play (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Moto Z2 Play (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Moto Z2 Play (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Moto G5 Plus (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Moto G5 Plus (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="393" dh="786">
                                                <p class="pvpt-cor">Redmi Note 5 (393x786)</p>
                                                <p class="lvpt-cor hid-cor">Redmi Note 5 (786x393)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Redmi Note 4 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Redmi Note 4 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Redmi Note 3 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Redmi Note 3 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Redmi 4 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Redmi 4 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Redmi 4X (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Redmi 4X (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">ZTE ZMAX Pro (360x640)</p>
                                                <p class="lvpt-cor hid-cor">ZTE ZMAX Pro (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">ZTE Max XL (360x640)</p>
                                                <p class="lvpt-cor hid-cor">ZTE Max XL (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">ZTE Blade X (360x640)</p>
                                                <p class="lvpt-cor hid-cor">ZTE Blade X (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="320" dh="570">
                                                <p class="pvpt-cor">ZTE Majesty Pro (320x570)</p>
                                                <p class="lvpt-cor hid-cor">ZTE Majesty Pro (570x320)</p>
                                            </div>
                                            <div class="option-box" dw="320" dh="570">
                                                <p class="pvpt-cor">ZTE Maven 3 (320x570)</p>
                                                <p class="lvpt-cor hid-cor">ZTE Maven 3 (570x320)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Alcatel A30 Fierce (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Alcatel A30 Fierce (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="480" dh="853">
                                                <p class="pvpt-cor">One Plus 3 (480x853)</p>
                                                <p class="lvpt-cor hid-cor">One Plus 3 (853x480)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Oppo A37 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Oppo A37 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Sony Xperia XA (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Sony Xperia XA (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Sony Xperia Z3 (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Sony Xperia Z3 (640x360)</p>
                                            </div>
                                            <div class="option-box" dw="360" dh="640">
                                                <p class="pvpt-cor">Vivo Y55s (360x640)</p>
                                                <p class="lvpt-cor hid-cor">Vivo Y55s (640x360)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-section">
                                        <div id="accordion-title-2" class="accordion-section-title" sectionid="accordion-2" knobid="accordion-knob-2" arial-label="tablet device resolutions" tabindex="0">
                                            <div class="accordion-title-label" style="display:inline-block;">Tablet</div>

                                        </div>
                                        <div id="accordion-2" class="accordion-section-content">
                                            <div class="option-box" dw="768" dh="1024">
                                                <p class="pvpt-cor">iPad (768x1024)</p>
                                                <p class="lvpt-cor hid-cor">iPad (1024x768)</p>
                                            </div>
                                            <div class="option-box" dw="768" dh="1024">
                                                <p class="pvpt-cor">iPad Mini (768x1024)</p>
                                                <p class="lvpt-cor hid-cor">iPad Mini (1024x768)</p>
                                            </div>
                                            <div class="option-box" dw="768" dh="1024">
                                                <p class="pvpt-cor">iPad Mini Retina (768x1024)</p>
                                                <p class="lvpt-cor hid-cor">iPad Mini Retina (1024x768)</p>
                                            </div>
                                            <div class="option-box" dw="1024" dh="1366">
                                                <p class="pvpt-cor">iPad Pro (1024x1366)</p>
                                                <p class="lvpt-cor hid-cor">iPad Pro (1366x1024)</p>
                                            </div>
                                            <div class="option-box" dw="768" dh="1024">
                                                <p class="pvpt-cor">iPad Retina (768x1024)</p>
                                                <p class="lvpt-cor hid-cor">iPad Retina (1024x768)</p>
                                            </div>
                                            <div class="option-box" dw="800" dh="1280">
                                                <p class="pvpt-cor">Galaxy Tab 10 (800x1280)</p>
                                                <p class="lvpt-cor hid-cor">Galaxy Tab 10 (1280x800)</p>
                                            </div>
                                            <div class="option-box" dw="800" dh="1280">
                                                <p class="pvpt-cor">Nexus 10 (800x1280)</p>
                                                <p class="lvpt-cor hid-cor">Nexus 10 (1280x800)</p>
                                            </div>
                                            <div class="option-box" dw="768" dh="1024">
                                                <p class="pvpt-cor">Nexus 9 (768x1024)</p>
                                                <p class="lvpt-cor hid-cor">Nexus 9 (1024x768)</p>
                                            </div>
                                            <div class="option-box" dw="600" dh="960">
                                                <p class="pvpt-cor">Nexus 7 13inch (600x960)</p>
                                                <p class="lvpt-cor hid-cor">Nexus 7 13inch (960x600)</p>
                                            </div>
                                            <div class="option-box" dw="800" dh="1280">
                                                <p class="pvpt-cor">Xperia Z4 Tablet (800x1280)</p>
                                                <p class="lvpt-cor hid-cor">Xperia Z4 Tablet (1280x800)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-section">
                                        <div id="accordion-title-3" class="accordion-section-title" sectionid="accordion-3" knobid="accordion-knob-3" arial-level="Large device resolutions" tabindex="0">
                                            <div class="accordion-title-label" style="display:inline-block;">Laptop &amp; Desktop</div>

                                        </div>
                                        <div id="accordion-3" class="accordion-section-content">
                                            <div class="option-box" dw="2560" dh="1440">
                                                <p class="pvpt-cor">iMac 27 (2560x1440)</p>
                                                <p class="lvpt-cor hid-cor">iMac 27 (1440x2560)</p>
                                            </div>
                                            <div class="option-box" dw="2560" dh="1440">
                                                <p class="pvpt-cor">iMac 5K (2560x1440)</p>
                                                <p class="lvpt-cor hid-cor">iMac 5K (1440x2560)</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="800">
                                                <p class="pvpt-cor">MacBook 12 (1280x800)</p>
                                                <p class="lvpt-cor hid-cor">MacBook 12 (800x1280)</p>
                                            </div>
                                            <div class="option-box" dw="1440" dh="900">
                                                <p class="pvpt-cor">MacBook Air 13 (1440x900)</p>
                                                <p class="lvpt-cor hid-cor">MacBook Air 13 (900x1440)</p>
                                            </div>
                                            <div class="option-box" dw="1366" dh="768">
                                                <p class="pvpt-cor">MacBoo Air 11 (1366x768)</p>
                                                <p class="lvpt-cor hid-cor">MacBoo Air 11 (768x1366)</p>
                                            </div>
                                            <div class="option-box" dw="1440" dh="900">
                                                <p class="pvpt-cor">MacBook Pro 15 (1440x900)</p>
                                                <p class="lvpt-cor hid-cor">MacBook Pro 15 (900x1440)</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="800">
                                                <p class="pvpt-cor">MacBook Pro 13 (1280x800)</p>
                                                <p class="lvpt-cor hid-cor">MacBook Pro 13 (800x1280)</p>
                                            </div>
                                            <div class="option-box" dw="1366" dh="768">
                                                <p class="pvpt-cor">Surface (1366x768)</p>
                                                <p class="lvpt-cor hid-cor">Surface (768x1366)</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="720">
                                                <p class="pvpt-cor">Surface 2 (1280x720)</p>
                                                <p class="lvpt-cor hid-cor">Surface 2 (720x1280)</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="720">
                                                <p class="pvpt-cor">Surface 3 (1280x720)</p>
                                                <p class="lvpt-cor hid-cor">Surface 3 (720x1280)</p>
                                            </div>
                                            <div class="option-box" dw="1500" dh="1000">
                                                <p class="pvpt-cor">Surface Book (1500x1000)</p>
                                                <p class="lvpt-cor hid-cor">Surface Book (1000x1500)</p>
                                            </div>
                                            <div class="option-box" dw="1280" dh="720">
                                                <p class="pvpt-cor">Surface Pro (1280x720)</p>
                                                <p class="lvpt-cor hid-cor">Surface Pro (720x1280)</p>
                                            </div>
                                            <div class="option-box" dw="1440" dh="960">
                                                <p class="pvpt-cor">Surface Pro 3 (1440x960)</p>
                                                <p class="lvpt-cor hid-cor">Surface Pro 3 (960x1440)</p>
                                            </div>
                                            <div class="option-box" dw="1368" dh="912">
                                                <p class="pvpt-cor">Surface Pro 4 (1368x912)</p>
                                                <p class="lvpt-cor hid-cor">Surface Pro 4 (912x1368)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Content section-->
                            </div> <!-- Main section -->
                        </div>
                    

        <script>
            jQuery(document).ready(function(){
                jQuery(".accordion-section-title").click(function() {

                    // Select all list items
                    var acc = jQuery(".accordion-section-title");

                    // Remove 'active' tag for all list items
                    for (let i = 0; i < acc.length; i++) {
                        acc[i].classList.remove("active");
                    }

                    // Add 'active' tag for currently selected item
                    this.classList.add("active");
                })
            });
        </script>

        <script type="text/javascript" src="<?php echo $url; ?>/js/resizer.js"></script>
