{extends file="layout.tpl"}
{block name=title}Guest Book{/block}
{block name=body}

    <h1>new entry</h1>
        <form method="POST" action="notes/new" style="  width: 800px; height: 300px;">
            <!-- <div class="form-group"> -->
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Name" name="author" required>
                    </div>
                  </div>
                 <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="email" name="email" required>
                        </div>
                 </div>
                <div class="form-group row">
                    <label for="inputHomepage" class="col-sm-2 col-form-label">Homepage</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" placeholder="http://" name="homepage" required>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="some text" name="text" pattern="[/<\/?[a-z][a-z0-9]*>/i]" required>
                        </div>
                </div>
                <div class="form-group row">
                    <img src="../public/captcha.php" /></br>
                    <label for="inputCaptcha" class="col-sm-2 col-form-label">Enter captcha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="captcha" name="captcha"required>
                        </div>
                </div> 
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </form>

</form>

{/block}