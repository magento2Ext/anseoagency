
<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
<style>
    .g-recaptcha.custom_captcha {
        float: left;
        width: 100%;
        margin-bottom: 20px;
    }
</style>
                 <div class="register-form customized_right_inner">
                 <?php echo get_the_post_thumbnail( get_the_ID());?>
                        <div class="form_outer_metas">
                            <h2>Add Meta Tag</h2>
                            <form method="post" id="validate_form" class="meta_gen">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="metatag_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="metatag_description" class="form-control" maxlength="160"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="metatag_keywords" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Robots</label>
                                    <select  class="form-control" name="metatag_robots">
                                        <option value="index, follow">Index, Follow</option>
                                        <option value="index, nofollow">Index, Nofollow</option>
                                        <option value="noindex, follow">Noindex, Follow</option>
                                        <option value="noindex, nofollow">Noindex, Nofollow</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Copyright</label>
                                    <input type="text" name="metatag_copyright" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Language</label>
                                    <select id="language" name="metatag_language"  class="form-control">
                                        <option value="EN">English</option>
                                        <option value="EN-GB">English - UK</option>
                                        <option value="EN-US">English - US</option>
                                        <option value="">-------------</option>
                                        <option value="ZH">Chinese</option>
                                        <option value="NL">Dutch</option>
                                        <option value="FI">Finnish</option>
                                        <option value="FR">French</option>
                                        <option value="DE">German</option>
                                        <option value="IW">Hebrew</option>
                                        <option value="HI">Hindi</option>
                                        <option value="IT">Italian</option>
                                        <option value="JA">Japanese</option>
                                        <option value="KO">Korean</option>
                                        <option value="NO">Norwegian</option>
                                        <option value="PL">Polish</option>
                                        <option value="PT">Portuguese</option>
                                        <option value="RO">Romanian</option>
                                        <option value="RU">Russian</option>
                                        <option value="ES">Spanish</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="metatag_author" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Creation Date</label>
                                    <input type="date" name="metatag_creation_date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Distribution</label>
                                    <select id="distribution" name="metatag_distribution" class="form-control">
                                        <option value="">Please Select&hellip;</option>
                                        <option value="global">Global</option>
                                        <option value="local">Local</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Rating</label>
                                    <select id="rating" name="metatag_rating" class="form-control">
                                        <option value="">Please Select&hellip;</option>
                                        <option value="general">General</option>
                                        <option value="kids">Kids</option>
                                        <option value="mature">Mature</option>
                                        <option value="restricted">Restricted</option>
                                    </select>

                                </div>
                                <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>
                                <input type="submit" name="submit"  value ="submit" class="btn btn-primary" id="submitBtn">

                            </form>
                        </div>
                        </div>
                        <div class="temp_meta-tag">
                                <?php  if(isset($_POST['submit'])){ ?>
                                    <h2>Meta Tags:</h2>
                                    <p>Your Meta Tags have been generated, copy and paste the code below between the <strong>&lt;head&gt;&lt;/head&gt;</strong> tags on your website:</p>
                                    <div class="greyish_box">
                                        <?php if(!empty($_POST['metatag_title'])) { ?> &lt;title&gt; <?php echo $_POST['metatag_title'] ?>&lt;/title&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_description'])) { ?><br>&lt;meta name=&quot;description&quot; content=&quot;<?php echo $_POST['metatag_description'] ?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_keywords'])) { ?><br>&lt;meta name=&quot;keywords&quot; content=&quot;<?php echo $_POST['metatag_keywords'] ?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_robots'])) { ?><br>&lt;meta name=&quot;robots&quot; content=&quot;<?php echo $_POST['metatag_robots']?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_copyright'])) { ?><br>&lt;meta name=&quot;copyright&quot; content=&quot;<?php echo $_POST['metatag_copyright']?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_language'])) { ?><br>&lt;meta name=&quot;language&quot; content=&quot;<?php echo $_POST['metatag_language']?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_author'])) { ?><br>&lt;meta name=&quot;author&quot; content=&quot;<?php echo $_POST['metatag_author']?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_creation_date'])) { ?><br>&lt;meta name=&quot;creationdate&quot; content=&quot;<?php echo $_POST['metatag_creation_date']?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_distribution'])) { ?><br>&lt;meta name=&quot;distribution&quot; content=&quot;<?php echo $_POST['metatag_distribution']?>&quot;&gt;<?php } ?>
                                        <?php if(!empty($_POST['metatag_rating'])) { ?><br>&lt;meta name=&quot;rating&quot; content=&quot;<?php echo $_POST['metatag_rating']?>&quot;&gt;<?php } ?>

                                    </div>
                                <?php } ?>
                            </div>
          

<script>

    document.getElementById("validate_form").addEventListener("submit",function(evt)
    {

        var response = grecaptcha.getResponse();
        if(response.length == 0)
        {
            //reCaptcha not verified
            alert("please verify you are human!");
            evt.preventDefault();
            return false;
        }
        //captcha verified
        //do the rest of your validations here

    });

</script>
