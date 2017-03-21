<?php

?>
<!-- modal-->
<div id="loginModal" class="modal fade">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">

            <form id="form-select">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="input-group">
                            <label for="techForm">&nbsp Tech &nbsp</label>
                            <input type="radio"  id="techForm" name="selectForm" checked="checked">
                            <label for="adminForm">Admin &nbsp</label>
                            <input type="radio"  id="adminForm" name="selectForm" >
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-body">
                <p id="add_err"></p>
                <form id="admin-login-form" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="input-group">
                                        <label class="input-group-addon" for="email">Email</label>
                                        <input required="required" type="text" class="form-control"
                                               id="email" name="email"/>
                                    </div>
                                </div>

                                <div class="col-md-10 col-md-offset-1">
                                    <div class="input-group">
                                        <label class="input-group-addon" for="userPassword">Password</label>
                                        <input required="required" type="password" class="form-control"
                                               id="userPassword" name="userPassword"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        <input type="submit" value="Login" class="btn btn-success" name='login' id="login" />
                    </div>
                </form>
                <form id="student-login-form" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="input-group">
                                        <label class="input-group-addon" for="userEmail">Email</label>
                                        <input required="required" type="text" class="form-control"
                                               id="userEmail" name="userEmail"/>
                                    </div>
                                </div>

                                <div class="col-md-10 col-md-offset-1">
                                    <div class="input-group">
                                        <label class="input-group-addon" for="password">Password</label>
                                        <input required="required" type="password" class="form-control"
                                               id="password" name="password"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        <input type="submit" value="Login" class="btn btn-success" name='login' id="login" />
                    </div>
                    <p>Don't have an account yet? click <a data-toggle='modal' data-target='#registerModal' data-dismiss='modal'>Sign Up!</a> </p>
</form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src = "login.js"></script>