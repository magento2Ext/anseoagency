<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/seo/robots-txt-generator/'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?php echo $url; ?>/js/robot_txt.js?v=10211"></script>
    
                        <div class="d-md-block d-lg-block col-lg-6 col-md-12 robo_nob_right">
                            <div class="form_outer define_float customized_right_inner">
                                <div class="form_container">
                                    <div class="form_inner">
                                        <h3>Default robot access</h3>
                                        <div class="form_top_ra form_main_ra define_float">
                                            <div class="form_ra left_ra">
                                                <div class="form_ra_main define_float">
                                                    <input type="radio" name="default_action" id="default_allow" value="Allow" checked=		"checked"/>
                                                    <label for="default_allow"><span>Allow all robots</span></label>
                                                </div>
                                            </div>
                                            <div class="form_ra right_ra">
                                                <div class="form_ra_main define_float">
                                                    <input type="radio" name="default_action" id="default_disallow" value="Disallow"/>
                                                    <label for="default_disallow"><span>Disallow all robots</span></label>
                                                </div>
                                            </div>
                                            <div class="form_ra right_ra disallow_hide-mobile">
                                                <img src="/anseo_agency/wp/wp-content/uploads/2025/02/form_illustration.svg" alt="">
                                            </div>

                                        </div>
                                        <div class="form_bot_ma define_float">
                                            <h3>Additional rules</h3>
                                            <div id="robot-rules" class="define_float">
                                                <div>
                                                    <div class="dis_alo_main define_float">
                                                        <h5>Action</h5>
                                                    </div>
                                                    <div class="form_ra left_ra">
                                                        <div class="form_ra_main define_float">
                                                            <input type="radio" name="add_action" id="add_allow" value="Allow">
                                                            <label for="add_allow"><span>Allow</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="form_ra right_ra">
                                                        <div class="form_ra_main define_float">
                                                            <input type="radio" name="add_action" id="add_disallow" value="Disallow" checked="checked">
                                                            <label for="add_disallow"><span>Disallow</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="form_sel define_float">
                                                        <select id="select_robot">

                                                        </select>
                                                    </div>



                                                    <div class="form_url_main define_float">
                                                        <input type="text" placeholder="Url should start  with /" name="url" id="url" >


                                                        <input type="button" id="add_rule" value="Add">
                                                        <div class="rbot_custom_result"><table  id="updateTable" class="table table-bordered"><thead><tr><th scope="col">Allow </th><th scope="col">robot</th><th scope="col">file or directory</th><th scope="col">Action</th></tr></thead><tbody id ="abc"></tbody></table>
                                                        </div>
                                                    </div>
                                                    <div id="add_err"  style="display: none;" class="errors"> <br></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="site_form define_float">
                                            <input type="text" placeholder="Sitemap" name="sitemap_url" id="sitemap">
                                            <div id="sitemap_err" class="errors"></div>
                                        </div>
                                        <div class="robts_text define_float">
                                            <p><textarea readonly="readonly" id="robots_txt" rows="10" cols="60">User-Agent: * Disallow: </textarea> </p>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>          
