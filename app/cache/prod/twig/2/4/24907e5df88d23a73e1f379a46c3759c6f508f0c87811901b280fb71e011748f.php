<?php

/* ApiMapBundle:Default:welcome.html.twig */
class __TwigTemplate_6b5142b1fdf6c6aec69b865fa0f2f9bc7d889c8ce8930a8fec8d33ee391d86cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">
        <title>Dash-boad SwissTRAFFIC</title>
        
        
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/css/font-awesome.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/css/custom.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css\" />
        <script src=\"https://code.jquery.com/jquery-2.2.0.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script> 
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
              <!-- /. WRAPPER -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- METISMENU SCRIPTS -->
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src=\"https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js\"></script>  

        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src= \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/morris/morris.js"), "html", null, true);
        echo "\"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src= \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/js/custom.js"), "html", null, true);
        echo "\"></script>
        
    </head>  
    <body>
        <div id=\"wrapper\">
            <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Dashboard</a>
                </div>
                <div style=\"color: white;

                     padding: 15px 50px 5px 50px;

                     float: right;

                     font-size: 16px;\">Last access : 30 May 2014 &nbsp;
                    <a href=\"#\" class=\"btn btn-danger square-btn-adjust\">Logout</a>
                </div>
            </nav>
            <!-- /. NAV TOP -->
            <nav class=\"navbar-default navbar-side\" role=\"navigation\">
                <div class=\"sidebar-collapse\">
                    <ul class=\"nav\" id=\"main-menu\">
                        <li class=\"text-center\">
                            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/apimap/images/find_user.png"), "html", null, true);
        echo "\" class=\"user-image img-responsive\">
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"fa fa-dashboard fa-3x\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"ui.html\"><i class=\"fa fa-desktop fa-3x\"></i> UI Elements</a>
                        </li>
                        <li>
                            <a href=\"tab-panel.html\"><i class=\"fa fa-qrcode fa-3x\"></i> Tabs &amp; Panels</a>
                        </li>
                        <li>
                            <a href=\"chart.html\"><i class=\"fa fa-bar-chart-o fa-3x\"></i> Morris Charts</a>
                        </li>
                        <li>
                            <a href=\"table.html\"><i class=\"fa fa-table fa-3x\"></i> Table Examples</a>
                        </li>
                        <li>
                            <a class=\"active-menu\" href=\"form.html\"><i class=\"fa fa-edit fa-3x\"></i> Forms </a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sitemap fa-3x\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"#\">Second Level Link</a>
                                </li>
                                <li>
                                    <a href=\"#\">Second Level Link</a>
                                </li>
                                <li>
                                    <a href=\"#\">Second Level Link<span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-third-level\">
                                        <li>
                                            <a href=\"#\">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">Third Level Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"blank.html\"><i class=\"fa fa-square-o fa-3x\"></i> Blank Page</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /. NAV SIDE -->
            <div id=\"page-wrapper\">
                <div id=\"page-inner\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h2>Travel Time </h2>
                            <h5>Calculation the RealTime TravelTime from Source to Destination</h5>
                        </div>
                    </div>
                    <!-- /. ROW -->
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Form Elements -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">Source-Destination</div>

                                <div class=\"panel-body\">

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <form id=\"eventForm\" method=\"post\" class=\"form-horizontal\">
                                                <div class=\"form-group\">
                                                    <label class=\"col-xs-3 control-label\">Source Unit</label>
                                                    <div class=\"col-xs-5\">
                                                        <select class=\"form-control\" id=\"source\">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>       
                                                <div class=\"form-group\">
                                                    <label class=\"col-xs-3 control-label\">Destination Unit</label>
                                                    <div class=\"col-xs-5\">
                                                        <select class=\"form-control\" id=\"source\">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"col-xs-3 control-label\">Start</label>
                                                    <div class=\"col-xs-5 date\">
                                                        <div class=\"input-group input-append date\" id=\"datePicker1\">
                                                            <input type=\"text\" class=\"form-control\" name=\"date\" />
                                                            <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"col-xs-3 control-label\">End</label>
                                                    <div class=\"col-xs-5 date\">
                                                        <div class=\"input-group input-append date\" id=\"datePicker2\">
                                                            <input type=\"text\" class=\"form-control\" name=\"Startdate\" />
                                                            <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=\"form-group\">
                                                    <div class=\"col-xs-5 col-xs-offset-3\">
                                                        <button type=\"submit\" class=\"btn btn-default\">Results</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <script type=\"text/javascript\">
                                                \$(function () {
                                                    \$('#datePicker1').datetimepicker();
                                                    \$('#datePicker2').datetimepicker({
                                                        useCurrent: false //Important! See issue #1075
                                                    });
                                                    \$(\"#datetimepicker6\").on(\"dp.change\", function (e) {
                                                        \$('#datetimepicker7').data(\"DateTimePicker\").minDate(e.date);
                                                    });
                                                    \$(\"#datetimepicker7\").on(\"dp.change\", function (e) {
                                                        \$('#datetimepicker6').data(\"DateTimePicker\").maxDate(e.date);
                                                    });
                                                });
                                            </script>

                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <!-- Advanced Tables -->
                                            <div class=\"panel panel-default\">
                                                <div class=\"panel-heading\">
                                                    Advanced Tables
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div class=\"table-responsive\">
                                                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Rendering engine</th>
                                                                    <th>Browser</th>
                                                                    <th>Platform(s)</th>
                                                                    <th>Engine version</th>
                                                                    <th>CSS grade</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class=\"odd gradeX\">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 4.0</td>
                                                                    <td>Win 95+</td>
                                                                    <td class=\"center\">4</td>
                                                                    <td class=\"center\">X</td>
                                                                </tr>
                                                                <tr class=\"even gradeC\">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 5.0</td>
                                                                    <td>Win 95+</td>
                                                                    <td class=\"center\">5</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"odd gradeA\">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 5.5</td>
                                                                    <td>Win 95+</td>
                                                                    <td class=\"center\">5.5</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"even gradeA\">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 6</td>
                                                                    <td>Win 98+</td>
                                                                    <td class=\"center\">6</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"odd gradeA\">
                                                                    <td>Trident</td>
                                                                    <td>Internet Explorer 7</td>
                                                                    <td>Win XP SP2+</td>
                                                                    <td class=\"center\">7</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"even gradeA\">
                                                                    <td>Trident</td>
                                                                    <td>AOL browser (AOL desktop)</td>
                                                                    <td>Win XP</td>
                                                                    <td class=\"center\">6</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 1.0</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class=\"center\">1.7</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 1.5</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 2.0</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Firefox 3.0</td>
                                                                    <td>Win 2k+ / OSX.3+</td>
                                                                    <td class=\"center\">1.9</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Camino 1.0</td>
                                                                    <td>OSX.2+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Camino 1.5</td>
                                                                    <td>OSX.3+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Netscape 7.2</td>
                                                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                    <td class=\"center\">1.7</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Netscape Browser 8</td>
                                                                    <td>Win 98SE+</td>
                                                                    <td class=\"center\">1.7</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Netscape Navigator 9</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.0</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.1</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1.1</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.2</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1.2</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.3</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1.3</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.4</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1.4</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.5</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1.5</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.6</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">1.6</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.7</td>
                                                                    <td>Win 98+ / OSX.1+</td>
                                                                    <td class=\"center\">1.7</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Mozilla 1.8</td>
                                                                    <td>Win 98+ / OSX.1+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Seamonkey 1.1</td>
                                                                    <td>Win 98+ / OSX.2+</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Gecko</td>
                                                                    <td>Epiphany 2.20</td>
                                                                    <td>Gnome</td>
                                                                    <td class=\"center\">1.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 1.2</td>
                                                                    <td>OSX.3</td>
                                                                    <td class=\"center\">125.5</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 1.3</td>
                                                                    <td>OSX.3</td>
                                                                    <td class=\"center\">312.8</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 2.0</td>
                                                                    <td>OSX.4+</td>
                                                                    <td class=\"center\">419.3</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>Safari 3.0</td>
                                                                    <td>OSX.4+</td>
                                                                    <td class=\"center\">522.1</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>OmniWeb 5.5</td>
                                                                    <td>OSX.4+</td>
                                                                    <td class=\"center\">420</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>iPod Touch / iPhone</td>
                                                                    <td>iPod</td>
                                                                    <td class=\"center\">420.1</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Webkit</td>
                                                                    <td>S60</td>
                                                                    <td>S60</td>
                                                                    <td class=\"center\">413</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 7.0</td>
                                                                    <td>Win 95+ / OSX.1+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 7.5</td>
                                                                    <td>Win 95+ / OSX.2+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 8.0</td>
                                                                    <td>Win 95+ / OSX.2+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 8.5</td>
                                                                    <td>Win 95+ / OSX.2+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 9.0</td>
                                                                    <td>Win 95+ / OSX.3+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 9.2</td>
                                                                    <td>Win 88+ / OSX.3+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera 9.5</td>
                                                                    <td>Win 88+ / OSX.3+</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Opera for Wii</td>
                                                                    <td>Wii</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Nokia N800</td>
                                                                    <td>N800</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Presto</td>
                                                                    <td>Nintendo DS browser</td>
                                                                    <td>Nintendo DS</td>
                                                                    <td class=\"center\">8.5</td>
                                                                    <td class=\"center\">C/A<sup>1</sup>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"gradeC\">
                                                                    <td>KHTML</td>
                                                                    <td>Konqureror 3.1</td>
                                                                    <td>KDE 3.1</td>
                                                                    <td class=\"center\">3.1</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>KHTML</td>
                                                                    <td>Konqureror 3.3</td>
                                                                    <td>KDE 3.3</td>
                                                                    <td class=\"center\">3.3</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>KHTML</td>
                                                                    <td>Konqureror 3.5</td>
                                                                    <td>KDE 3.5</td>
                                                                    <td class=\"center\">3.5</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeX\">
                                                                    <td>Tasman</td>
                                                                    <td>Internet Explorer 4.5</td>
                                                                    <td>Mac OS 8-9</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">X</td>
                                                                </tr>
                                                                <tr class=\"gradeC\">
                                                                    <td>Tasman</td>
                                                                    <td>Internet Explorer 5.1</td>
                                                                    <td>Mac OS 7.6-9</td>
                                                                    <td class=\"center\">1</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"gradeC\">
                                                                    <td>Tasman</td>
                                                                    <td>Internet Explorer 5.2</td>
                                                                    <td>Mac OS 8-X</td>
                                                                    <td class=\"center\">1</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Misc</td>
                                                                    <td>NetFront 3.1</td>
                                                                    <td>Embedded devices</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"gradeA\">
                                                                    <td>Misc</td>
                                                                    <td>NetFront 3.4</td>
                                                                    <td>Embedded devices</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">A</td>
                                                                </tr>
                                                                <tr class=\"gradeX\">
                                                                    <td>Misc</td>
                                                                    <td>Dillo 0.8</td>
                                                                    <td>Embedded devices</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">X</td>
                                                                </tr>
                                                                <tr class=\"gradeX\">
                                                                    <td>Misc</td>
                                                                    <td>Links</td>
                                                                    <td>Text only</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">X</td>
                                                                </tr>
                                                                <tr class=\"gradeX\">
                                                                    <td>Misc</td>
                                                                    <td>Lynx</td>
                                                                    <td>Text only</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">X</td>
                                                                </tr>
                                                                <tr class=\"gradeC\">
                                                                    <td>Misc</td>
                                                                    <td>IE Mobile</td>
                                                                    <td>Windows Mobile 6</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"gradeC\">
                                                                    <td>Misc</td>
                                                                    <td>PSP browser</td>
                                                                    <td>PSP</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">C</td>
                                                                </tr>
                                                                <tr class=\"gradeU\">
                                                                    <td>Other browsers</td>
                                                                    <td>All others</td>
                                                                    <td>-</td>
                                                                    <td class=\"center\">-</td>
                                                                    <td class=\"center\">U</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--End Advanced Tables -->
                                        </div>
                                    </div>

                                    <div class=\"row\"> 

                                        <div class=\"col-md-6 col-sm-12 col-xs-12\">                     
                                            <div class=\"panel panel-default\">
                                                <div class=\"panel-heading\">
                                                    Bar Chart Example
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div id=\"morris-bar-chart\"></div>
                                                </div>
                                            </div>            
                                        </div>
                                        <div class=\"col-md-6 col-sm-12 col-xs-12\">                     
                                            <div class=\"panel panel-default\">
                                                <div class=\"panel-heading\">
                                                    Area Chart Example
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div id=\"morris-area-chart\"></div>
                                                </div>
                                            </div>            
                                        </div> 

                                    </div>
                                    <!-- /. ROW  -->
                                    <div class=\"row\">                     

                                        <div class=\"col-md-6 col-sm-12 col-xs-12\">                     
                                            <div class=\"panel panel-default\">
                                                <div class=\"panel-heading\">
                                                    Donut Chart Example
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div id=\"morris-donut-chart\"></div>
                                                </div>
                                            </div>            
                                        </div>
                                        <div class=\"col-md-6 col-sm-12 col-xs-12\">                     
                                            <div class=\"panel panel-default\">
                                                <div class=\"panel-heading\">
                                                    Line Chart Example
                                                </div>
                                                <div class=\"panel-body\">
                                                    <div id=\"morris-line-chart\"></div>
                                                </div>
                                            </div>            
                                        </div> 
                                    </div>
                                </div>
                                <!-- End Form Elements -->
                            </div>
                        </div>
                        <!-- /. ROW -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h3>More Customization</h3>
                                <p>For more customization for this template or its components please visit
                                    official bootstrap website i.e getbootstrap.com or
                                    <a href=\"http://getbootstrap.com/components/\" target=\"_blank\">click here</a>. We hope you will enjoy our template. This template is easy to use, light
                                    weight and made with love by binarycart.com</p>
                            </div>
                        </div>
                        <!-- /. ROW -->
                    </div>
                    <!-- /. PAGE INNER -->
                </div>
                <!-- /. PAGE WRAPPER -->
            </div>
        </div>
          <script>
                                                \$(document).ready(function () {
                                                    \$('#dataTables-example').dataTable();
                                                });
        </script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "ApiMapBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 71,  85 => 41,  80 => 39,  76 => 38,  69 => 34,  64 => 32,  59 => 30,  43 => 17,  39 => 16,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="../../favicon.ico">*/
/*         <title>Dash-boad SwissTRAFFIC</title>*/
/*         */
/*         */
/*             <link href="{{asset('bundles/apimap/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         */
/*         <link href="{{asset('bundles/apimap/css/font-awesome.css')}}"rel="stylesheet">*/
/*         <link href="{{asset('bundles/apimap/css/custom.css')}}"rel="stylesheet">*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" />*/
/*         <script src="https://code.jquery.com/jquery-2.2.0.js"></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.js"></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> */
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">*/
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />*/
/*         */
/*               <!-- /. WRAPPER -->*/
/*         <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->*/
/*         <!-- JQUERY SCRIPTS -->*/
/*         <script src="{{asset('bundles/apimap/dataTables/jquery.dataTables.js')}}"></script>*/
/*         <!-- BOOTSTRAP SCRIPTS -->*/
/*         <script src="{{asset('bundles/apimap/js/bootstrap.min.js')}}"></script>*/
/*         <!-- METISMENU SCRIPTS -->*/
/*         <script src="{{asset('bundles/apimap/js/jquery.metisMenu.js')}}"></script>*/
/*         <!-- MORRIS CHART SCRIPTS -->*/
/*         <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>  */
/* */
/*         <script src="{{asset('bundles/apimap/morris/raphael-2.1.0.min.js')}}"></script>*/
/*         <script src= "{{asset('bundles/apimap/morris/morris.js')}}"></script>*/
/*         <!-- CUSTOM SCRIPTS -->*/
/*         <script src= "{{asset('bundles/apimap/js/custom.js')}}"></script>*/
/*         */
/*     </head>  */
/*     <body>*/
/*         <div id="wrapper">*/
/*             <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index.html">Dashboard</a>*/
/*                 </div>*/
/*                 <div style="color: white;*/
/* */
/*                      padding: 15px 50px 5px 50px;*/
/* */
/*                      float: right;*/
/* */
/*                      font-size: 16px;">Last access : 30 May 2014 &nbsp;*/
/*                     <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>*/
/*                 </div>*/
/*             </nav>*/
/*             <!-- /. NAV TOP -->*/
/*             <nav class="navbar-default navbar-side" role="navigation">*/
/*                 <div class="sidebar-collapse">*/
/*                     <ul class="nav" id="main-menu">*/
/*                         <li class="text-center">*/
/*                             <img src="{{asset('bundles/apimap/images/find_user.png')}}" class="user-image img-responsive">*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs &amp; Panels</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="active-menu" href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="#">Second Level Link</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Second Level Link</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Second Level Link<span class="fa arrow"></span></a>*/
/*                                     <ul class="nav nav-third-level">*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Link</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Link</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#">Third Level Link</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*             <!-- /. NAV SIDE -->*/
/*             <div id="page-wrapper">*/
/*                 <div id="page-inner">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <h2>Travel Time </h2>*/
/*                             <h5>Calculation the RealTime TravelTime from Source to Destination</h5>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /. ROW -->*/
/*                     <hr>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <!-- Form Elements -->*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">Source-Destination</div>*/
/* */
/*                                 <div class="panel-body">*/
/* */
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <form id="eventForm" method="post" class="form-horizontal">*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-xs-3 control-label">Source Unit</label>*/
/*                                                     <div class="col-xs-5">*/
/*                                                         <select class="form-control" id="source">*/
/*                                                             <option>1</option>*/
/*                                                             <option>2</option>*/
/*                                                             <option>3</option>*/
/*                                                             <option>4</option>*/
/*                                                             <option>5</option>*/
/*                                                         </select>*/
/*                                                     </div>*/
/*                                                 </div>       */
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-xs-3 control-label">Destination Unit</label>*/
/*                                                     <div class="col-xs-5">*/
/*                                                         <select class="form-control" id="source">*/
/*                                                             <option>1</option>*/
/*                                                             <option>2</option>*/
/*                                                             <option>3</option>*/
/*                                                             <option>4</option>*/
/*                                                             <option>5</option>*/
/*                                                         </select>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-xs-3 control-label">Start</label>*/
/*                                                     <div class="col-xs-5 date">*/
/*                                                         <div class="input-group input-append date" id="datePicker1">*/
/*                                                             <input type="text" class="form-control" name="date" />*/
/*                                                             <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-xs-3 control-label">End</label>*/
/*                                                     <div class="col-xs-5 date">*/
/*                                                         <div class="input-group input-append date" id="datePicker2">*/
/*                                                             <input type="text" class="form-control" name="Startdate" />*/
/*                                                             <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                                 <div class="form-group">*/
/*                                                     <div class="col-xs-5 col-xs-offset-3">*/
/*                                                         <button type="submit" class="btn btn-default">Results</button>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </form>*/
/*                                             <script type="text/javascript">*/
/*                                                 $(function () {*/
/*                                                     $('#datePicker1').datetimepicker();*/
/*                                                     $('#datePicker2').datetimepicker({*/
/*                                                         useCurrent: false //Important! See issue #1075*/
/*                                                     });*/
/*                                                     $("#datetimepicker6").on("dp.change", function (e) {*/
/*                                                         $('#datetimepicker7').data("DateTimePicker").minDate(e.date);*/
/*                                                     });*/
/*                                                     $("#datetimepicker7").on("dp.change", function (e) {*/
/*                                                         $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);*/
/*                                                     });*/
/*                                                 });*/
/*                                             </script>*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="row">*/
/*                                         <div class="col-md-12">*/
/*                                             <!-- Advanced Tables -->*/
/*                                             <div class="panel panel-default">*/
/*                                                 <div class="panel-heading">*/
/*                                                     Advanced Tables*/
/*                                                 </div>*/
/*                                                 <div class="panel-body">*/
/*                                                     <div class="table-responsive">*/
/*                                                         <table class="table table-striped table-bordered table-hover" id="dataTables-example" >*/
/*                                                             <thead>*/
/*                                                                 <tr>*/
/*                                                                     <th>Rendering engine</th>*/
/*                                                                     <th>Browser</th>*/
/*                                                                     <th>Platform(s)</th>*/
/*                                                                     <th>Engine version</th>*/
/*                                                                     <th>CSS grade</th>*/
/*                                                                 </tr>*/
/*                                                             </thead>*/
/*                                                             <tbody>*/
/*                                                                 <tr class="odd gradeX">*/
/*                                                                     <td>Trident</td>*/
/*                                                                     <td>Internet Explorer 4.0</td>*/
/*                                                                     <td>Win 95+</td>*/
/*                                                                     <td class="center">4</td>*/
/*                                                                     <td class="center">X</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="even gradeC">*/
/*                                                                     <td>Trident</td>*/
/*                                                                     <td>Internet Explorer 5.0</td>*/
/*                                                                     <td>Win 95+</td>*/
/*                                                                     <td class="center">5</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="odd gradeA">*/
/*                                                                     <td>Trident</td>*/
/*                                                                     <td>Internet Explorer 5.5</td>*/
/*                                                                     <td>Win 95+</td>*/
/*                                                                     <td class="center">5.5</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="even gradeA">*/
/*                                                                     <td>Trident</td>*/
/*                                                                     <td>Internet Explorer 6</td>*/
/*                                                                     <td>Win 98+</td>*/
/*                                                                     <td class="center">6</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="odd gradeA">*/
/*                                                                     <td>Trident</td>*/
/*                                                                     <td>Internet Explorer 7</td>*/
/*                                                                     <td>Win XP SP2+</td>*/
/*                                                                     <td class="center">7</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="even gradeA">*/
/*                                                                     <td>Trident</td>*/
/*                                                                     <td>AOL browser (AOL desktop)</td>*/
/*                                                                     <td>Win XP</td>*/
/*                                                                     <td class="center">6</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Firefox 1.0</td>*/
/*                                                                     <td>Win 98+ / OSX.2+</td>*/
/*                                                                     <td class="center">1.7</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Firefox 1.5</td>*/
/*                                                                     <td>Win 98+ / OSX.2+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Firefox 2.0</td>*/
/*                                                                     <td>Win 98+ / OSX.2+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Firefox 3.0</td>*/
/*                                                                     <td>Win 2k+ / OSX.3+</td>*/
/*                                                                     <td class="center">1.9</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Camino 1.0</td>*/
/*                                                                     <td>OSX.2+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Camino 1.5</td>*/
/*                                                                     <td>OSX.3+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Netscape 7.2</td>*/
/*                                                                     <td>Win 95+ / Mac OS 8.6-9.2</td>*/
/*                                                                     <td class="center">1.7</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Netscape Browser 8</td>*/
/*                                                                     <td>Win 98SE+</td>*/
/*                                                                     <td class="center">1.7</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Netscape Navigator 9</td>*/
/*                                                                     <td>Win 98+ / OSX.2+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.0</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.1</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.1</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.2</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.2</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.3</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.3</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.4</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.4</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.5</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.5</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.6</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.6</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.7</td>*/
/*                                                                     <td>Win 98+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.7</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Mozilla 1.8</td>*/
/*                                                                     <td>Win 98+ / OSX.1+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Seamonkey 1.1</td>*/
/*                                                                     <td>Win 98+ / OSX.2+</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Gecko</td>*/
/*                                                                     <td>Epiphany 2.20</td>*/
/*                                                                     <td>Gnome</td>*/
/*                                                                     <td class="center">1.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>Safari 1.2</td>*/
/*                                                                     <td>OSX.3</td>*/
/*                                                                     <td class="center">125.5</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>Safari 1.3</td>*/
/*                                                                     <td>OSX.3</td>*/
/*                                                                     <td class="center">312.8</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>Safari 2.0</td>*/
/*                                                                     <td>OSX.4+</td>*/
/*                                                                     <td class="center">419.3</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>Safari 3.0</td>*/
/*                                                                     <td>OSX.4+</td>*/
/*                                                                     <td class="center">522.1</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>OmniWeb 5.5</td>*/
/*                                                                     <td>OSX.4+</td>*/
/*                                                                     <td class="center">420</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>iPod Touch / iPhone</td>*/
/*                                                                     <td>iPod</td>*/
/*                                                                     <td class="center">420.1</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Webkit</td>*/
/*                                                                     <td>S60</td>*/
/*                                                                     <td>S60</td>*/
/*                                                                     <td class="center">413</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 7.0</td>*/
/*                                                                     <td>Win 95+ / OSX.1+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 7.5</td>*/
/*                                                                     <td>Win 95+ / OSX.2+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 8.0</td>*/
/*                                                                     <td>Win 95+ / OSX.2+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 8.5</td>*/
/*                                                                     <td>Win 95+ / OSX.2+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 9.0</td>*/
/*                                                                     <td>Win 95+ / OSX.3+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 9.2</td>*/
/*                                                                     <td>Win 88+ / OSX.3+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera 9.5</td>*/
/*                                                                     <td>Win 88+ / OSX.3+</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Opera for Wii</td>*/
/*                                                                     <td>Wii</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Nokia N800</td>*/
/*                                                                     <td>N800</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Presto</td>*/
/*                                                                     <td>Nintendo DS browser</td>*/
/*                                                                     <td>Nintendo DS</td>*/
/*                                                                     <td class="center">8.5</td>*/
/*                                                                     <td class="center">C/A<sup>1</sup>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeC">*/
/*                                                                     <td>KHTML</td>*/
/*                                                                     <td>Konqureror 3.1</td>*/
/*                                                                     <td>KDE 3.1</td>*/
/*                                                                     <td class="center">3.1</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>KHTML</td>*/
/*                                                                     <td>Konqureror 3.3</td>*/
/*                                                                     <td>KDE 3.3</td>*/
/*                                                                     <td class="center">3.3</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>KHTML</td>*/
/*                                                                     <td>Konqureror 3.5</td>*/
/*                                                                     <td>KDE 3.5</td>*/
/*                                                                     <td class="center">3.5</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeX">*/
/*                                                                     <td>Tasman</td>*/
/*                                                                     <td>Internet Explorer 4.5</td>*/
/*                                                                     <td>Mac OS 8-9</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">X</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeC">*/
/*                                                                     <td>Tasman</td>*/
/*                                                                     <td>Internet Explorer 5.1</td>*/
/*                                                                     <td>Mac OS 7.6-9</td>*/
/*                                                                     <td class="center">1</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeC">*/
/*                                                                     <td>Tasman</td>*/
/*                                                                     <td>Internet Explorer 5.2</td>*/
/*                                                                     <td>Mac OS 8-X</td>*/
/*                                                                     <td class="center">1</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>NetFront 3.1</td>*/
/*                                                                     <td>Embedded devices</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeA">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>NetFront 3.4</td>*/
/*                                                                     <td>Embedded devices</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">A</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeX">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>Dillo 0.8</td>*/
/*                                                                     <td>Embedded devices</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">X</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeX">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>Links</td>*/
/*                                                                     <td>Text only</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">X</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeX">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>Lynx</td>*/
/*                                                                     <td>Text only</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">X</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeC">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>IE Mobile</td>*/
/*                                                                     <td>Windows Mobile 6</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeC">*/
/*                                                                     <td>Misc</td>*/
/*                                                                     <td>PSP browser</td>*/
/*                                                                     <td>PSP</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">C</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr class="gradeU">*/
/*                                                                     <td>Other browsers</td>*/
/*                                                                     <td>All others</td>*/
/*                                                                     <td>-</td>*/
/*                                                                     <td class="center">-</td>*/
/*                                                                     <td class="center">U</td>*/
/*                                                                 </tr>*/
/*                                                             </tbody>*/
/*                                                         </table>*/
/*                                                     </div>*/
/* */
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <!--End Advanced Tables -->*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="row"> */
/* */
/*                                         <div class="col-md-6 col-sm-12 col-xs-12">                     */
/*                                             <div class="panel panel-default">*/
/*                                                 <div class="panel-heading">*/
/*                                                     Bar Chart Example*/
/*                                                 </div>*/
/*                                                 <div class="panel-body">*/
/*                                                     <div id="morris-bar-chart"></div>*/
/*                                                 </div>*/
/*                                             </div>            */
/*                                         </div>*/
/*                                         <div class="col-md-6 col-sm-12 col-xs-12">                     */
/*                                             <div class="panel panel-default">*/
/*                                                 <div class="panel-heading">*/
/*                                                     Area Chart Example*/
/*                                                 </div>*/
/*                                                 <div class="panel-body">*/
/*                                                     <div id="morris-area-chart"></div>*/
/*                                                 </div>*/
/*                                             </div>            */
/*                                         </div> */
/* */
/*                                     </div>*/
/*                                     <!-- /. ROW  -->*/
/*                                     <div class="row">                     */
/* */
/*                                         <div class="col-md-6 col-sm-12 col-xs-12">                     */
/*                                             <div class="panel panel-default">*/
/*                                                 <div class="panel-heading">*/
/*                                                     Donut Chart Example*/
/*                                                 </div>*/
/*                                                 <div class="panel-body">*/
/*                                                     <div id="morris-donut-chart"></div>*/
/*                                                 </div>*/
/*                                             </div>            */
/*                                         </div>*/
/*                                         <div class="col-md-6 col-sm-12 col-xs-12">                     */
/*                                             <div class="panel panel-default">*/
/*                                                 <div class="panel-heading">*/
/*                                                     Line Chart Example*/
/*                                                 </div>*/
/*                                                 <div class="panel-body">*/
/*                                                     <div id="morris-line-chart"></div>*/
/*                                                 </div>*/
/*                                             </div>            */
/*                                         </div> */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- End Form Elements -->*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /. ROW -->*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <h3>More Customization</h3>*/
/*                                 <p>For more customization for this template or its components please visit*/
/*                                     official bootstrap website i.e getbootstrap.com or*/
/*                                     <a href="http://getbootstrap.com/components/" target="_blank">click here</a>. We hope you will enjoy our template. This template is easy to use, light*/
/*                                     weight and made with love by binarycart.com</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /. ROW -->*/
/*                     </div>*/
/*                     <!-- /. PAGE INNER -->*/
/*                 </div>*/
/*                 <!-- /. PAGE WRAPPER -->*/
/*             </div>*/
/*         </div>*/
/*           <script>*/
/*                                                 $(document).ready(function () {*/
/*                                                     $('#dataTables-example').dataTable();*/
/*                                                 });*/
/*         </script>*/
/* */
/*     </body>*/
/* */
/* </html>*/
