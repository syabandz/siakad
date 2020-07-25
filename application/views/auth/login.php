<body class="login example2">
    <div class="main-login col-sm-5 col-sm-offset-3"  style="margin-top:20px; margin-bottom: 50px;">
        <div class="logo">SISTEM INFORMASI AKADEMIK </div>
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3 class="center">HALAMAN LOGIN</h3><br>
            <?php echo form_open('auth/chek_login', 'class="form-login"'); ?>
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <label for="username">Masukan Username</label>
                        <span class="input-icon">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <label for="username">Masukan Password</label>
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-actions">                        
                        <button type="submit" name="submit" class="btn btn-success pull-right">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- end: LOGIN BOX -->
    </div>
</body>
<!-- end: BODY -->