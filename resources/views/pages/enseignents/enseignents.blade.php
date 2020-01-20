
@extends('layouts.default.master')

@section('content')


  <section class="content">
        <div class="container-fluid">
            
            <!-- Hover Zoom Effect -->
            <div class="block-header">
                <!-- <h2>HOVER ZOOM EFFECT</h2> -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class=" material-icons col-pink">email</i>
                        </div>
                        <div class="content">
                            <div class="text">MESSAGES</div>
                            <div class="number">15</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-blue">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">CPU USAGE</div>
                            <div class="number">92%</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-light-blue">access_alarm</i>
                        </div>
                        <div class="content">
                            <div class="text">ALARM</div>
                            <div class="number">07:00 AM</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-cyan">gps_fixed</i>
                        </div>
                        <div class="content">
                            <div class="text">LOCATION</div>
                            <div class="number">Turkey</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Zoom Effect -->

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <!-- EXPORTABLE TABLE -->
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a  role="button" data-toggle="modal" data-target="#defaultModal">
                                        <i class="material-icons col-light-blue">group_add</i>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Email</th>
                                            <th>Grade</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>

                            <!-- Advanced Validation -->
            <div class="row clearfix modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="card">
                        <div class="header">
                            <h2 class="center">Enregistrement</h2>
                            
                        </div>
                        <div class="body">

                            <form id="form_advanced_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="minmaxlength" maxlength="10" minlength="3" required>
                                        <label class="form-label">Min/Max Length</label>
                                    </div>
                                    <div class="help-info">Min. 3, Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>
                                        <label class="form-label">Min/Max Value</label>
                                    </div>
                                    <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="url" class="form-control" name="url" required>
                                        <label class="form-label">Url</label>
                                    </div>
                                    <div class="help-info">Starts with http://, https://, ftp:// etc</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="date" required>
                                        <label class="form-label">Date</label>
                                    </div>
                                    <div class="help-info">YYYY-MM-DD format</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="number" required>
                                        <label class="form-label">Number</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>
                                        <label class="form-label">Credit Card</label>
                                    </div>
                                    <div class="help-info">Ex: 1234-5678-9012-3456</div>
                                </div>
                                
                                <div class="modal-footer">
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
                        

            <!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    @stop