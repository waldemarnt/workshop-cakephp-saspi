<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left"><i class="icon-home"></i> Dashboard</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="icon-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">

          <!-- Today status. jQuery Sparkline plugin used. -->

          <div class="row-fluid">
            <div class="span12"> 
              <!-- List starts -->
              <ul class="today-datas">
                <!-- List #1 -->
                <li>
                  <!-- Graph -->
                  <div><span id="todayspark1" class="spark"><canvas width="77" height="30" style="display: inline-block; width: 77px; height: 30px; vertical-align: top;"></canvas></span></div>
                  <!-- Text -->
                  <div class="datas-text">12,000 visitors/day</div>
                </li>
                <li>
                  <div><span id="todayspark2" class="spark"><canvas width="77" height="30" style="display: inline-block; width: 77px; height: 30px; vertical-align: top;"></canvas></span></div>
                  <div class="datas-text">30,000 Pageviews</div>
                </li>
                <li>
                  <div><span id="todayspark3" class="spark"><canvas width="77" height="30" style="display: inline-block; width: 77px; height: 30px; vertical-align: top;"></canvas></span></div>
                  <div class="datas-text">15.66% Bounce Rate</div>
                </li>
                <li>
                  <div><span id="todayspark4" class="spark"><canvas width="77" height="30" style="display: inline-block; width: 77px; height: 30px; vertical-align: top;"></canvas></span></div>
                  <div class="datas-text">$12,000 Revenue/Day</div>
                </li> 
                <li>
                  <div><span id="todayspark5" class="spark"><canvas width="250" height="30" style="display: inline-block; width: 250px; height: 30px; vertical-align: top;"></canvas></span></div>
                  <div class="datas-text">15,000000 visitors till date</div>
                </li>                                                                                                              
              </ul> 
            </div>
          </div>

          <!-- Today status ends -->

          <!-- Dashboard Graph starts -->

          <div class="row-fluid">
            <div class="span8">

              <!-- Widget -->
              <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                  <div class="pull-left">Dashboard</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>              

                <!-- Widget content -->
                <div class="widget-content">
                  <div class="padd">

                    <!-- Curve chart (Blue color). jQuery Flot plugin used. -->
                    <div id="curve-chart" style="padding: 0px; position: relative;"><canvas class="base" width="453" height="250"></canvas><canvas class="overlay" width="453" height="250" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:center;left:-6px;top:228px;width:56px">0</div><div class="tickLabel" style="position:absolute;text-align:center;left:57px;top:228px;width:56px">2</div><div class="tickLabel" style="position:absolute;text-align:center;left:121px;top:228px;width:56px">4</div><div class="tickLabel" style="position:absolute;text-align:center;left:184px;top:228px;width:56px">6</div><div class="tickLabel" style="position:absolute;text-align:center;left:247px;top:228px;width:56px">8</div><div class="tickLabel" style="position:absolute;text-align:center;left:310px;top:228px;width:56px">10</div><div class="tickLabel" style="position:absolute;text-align:center;left:374px;top:228px;width:56px">12</div></div><div class="yAxis y1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:right;top:194px;right:436px;width:17px">-1.0</div><div class="tickLabel" style="position:absolute;text-align:right;top:148px;right:436px;width:17px">-0.5</div><div class="tickLabel" style="position:absolute;text-align:right;top:103px;right:436px;width:17px">0.0</div><div class="tickLabel" style="position:absolute;text-align:right;top:57px;right:436px;width:17px">0.5</div><div class="tickLabel" style="position:absolute;text-align:right;top:11px;right:436px;width:17px">1.0</div></div></div><div class="legend"><div style="position: absolute; width: 50px; height: 48px; top: 9px; right: 9px; opacity: 0.85; background-color: rgb(255, 255, 255);"> </div><table style="position:absolute;top:9px;right:9px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(30,175,237);overflow:hidden"></div></div></td><td class="legendLabel">sin(x)</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(30,175,237);overflow:hidden"></div></div></td><td class="legendLabel">cos(x)</td></tr></tbody></table></div></div>

                    <hr>
                    <!-- Hover location -->
                    <div id="hoverdata">Mouse hovers at
                    (<span id="x">13.28</span>, <span id="y">1.07</span>). <span id="clickdata"></span></div>          

                    <!-- Skil this line. <div class="uni"><input id="enableTooltip" type="checkbox">Enable tooltip</div> -->

                  </div>
                </div>
                <!-- Widget ends -->

              </div>
            </div>

            <div class="span4">

              <div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Today Status</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>             

                <div class="widget-content">
                  <div class="padd">

                    <!-- Visitors, pageview, bounce rate, etc., Sparklines plugin used -->
                    <ul class="current-status">
                      <li>
                        <span id="status1"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">Visits : 2000</span>
                      </li>
                      <li>
                        <span id="status2"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">Unique Visitors : 1,345</span>
                      </li>
                      <li>
                        <span id="status3"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">Pageviews : 2000</span>
                      </li>
                      <li>
                        <span id="status4"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">Pages / Visit : 2000</span>
                      </li>
                      <li>
                        <span id="status5"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">Avg. Visit Duration : 2000</span>
                      </li>
                      <li>
                        <span id="status6"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">Bounce Rate : 2000</span>
                      </li>   
                      <li>
                        <span id="status7"><canvas width="80" height="20" style="display: inline-block; width: 80px; height: 20px; vertical-align: top;"></canvas></span> <span class="bold">% New Visits : 2000</span>
                      </li>                                                                                                            
                    </ul>

                  </div>
                </div>

              </div>

            </div>
          </div>
          <!-- Dashboard graph ends -->

          <!-- Chats, File upload and Recent Comments -->
          <div class="row-fluid">

            <div class="span4">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Chats</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">
                    
                    <ul class="chats">

                      <!-- Chat by us. Use the class "by-me". -->
                      <li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt="">
                        </div>

                        <div class="chat-content">
                          <!-- In meta area, first include "name" and then "time" -->
                          <div class="chat-meta">Ashok <span class="pull-right">3 hours ago</span></div>
                          Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li> 

                      <!-- Chat by other. Use the class "by-other". -->
                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user.jpg" alt="">
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                          Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>   

                      <li class="by-me">
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt="">
                        </div>

                        <div class="chat-content">
                          <div class="chat-meta">Ashok <span class="pull-right">4 hours ago</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>  

                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user.jpg" alt="">
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Ravi</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>                                                                                  

                    </ul>

                  </div>
                  <!-- Widget footer -->
                  <div class="widget-foot">
                      
                      <form class="form-inline">
                        <input type="text" class="input-medium" placeholder="Type your message here...">
                        <button type="submit" class="btn">Send</button>
                      </form>


                  </div>
                </div>


              </div> 
            </div>


            <!-- File Upload widget -->
            <div class="span4">
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">File Upload</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <!-- Widget content -->
                  <ul class="file-upload">

                    <li>
                      <strong><i class="icon-upload-alt"></i> File_Name_Here.Mp3</strong>
                      <div class="file-meta">3.3 of 5MB - 5 mins - 1MB/Sec</div>

                      <div class="progress progress-animated striped">
                        <div class="bar bar-success" data-percentage="100" style="width: 100%;">100%</div>
                      </div>
                    </li>

                    <li>
                      <strong><i class="icon-ok"></i> Third_File_Here.Mp3</strong>
                      <div class="file-meta">5MB - 5 mins - Stopped</div>
                    </li>                        

                    <li>
                      <strong><i class="icon-ok"></i> Third_File_Here.Mp3</strong>
                      <div class="file-meta">5MB - 5 mins - Stopped</div>
                    </li>                                                                                                                      
                  </ul>

                  <div class="widget-foot">
                  </div>

                </div>
              </div>

              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Browsers</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content referrer">
                  <!-- Widget content -->
                  
                  <table class="table table-striped table-bordered table-hover">
                    <tbody><tr>
                      <th><center>#</center></th>
                      <th>Browsers</th>
                      <th>Visits</th>
                    </tr>
                    <tr>
                      <td><img src="img/icons/chrome.png" alt="">
                      </td><td>Google Chrome</td>
                      <td>3,005</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/firefox.png" alt="">
                      </td><td>Mozilla Firefox</td>
                      <td>2,505</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/ie.png" alt="">
                      </td><td>Internet Explorer</td>
                      <td>1,405</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/opera.png" alt="">
                      </td><td>Opera</td>
                      <td>4,005</td>
                    </tr> 
                    <tr>
                      <td><img src="img/icons/safari.png" alt="">
                      </td><td>Safari</td>
                      <td>505</td>
                    </tr>                                                                    
                  </tbody></table>

                  <div class="widget-foot">
                  </div>
                </div>
              </div>

            </div>


            <div class="span4">
              <!-- Widget -->
              <div class="widget">
                <!-- Widget title -->
                <div class="widget-head">
                  <div class="pull-left">Recent Comments</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <!-- Widget content -->
                  <div class="padd">

                    <ul class="recent">


                      <li>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-mini"><i class="icon-ok"></i> </button>
                            <button class="btn btn-mini"><i class="icon-pencil"></i> </button>
                            <button class="btn btn-mini"><i class="icon-remove"></i> </button>
                          </div>

                          <button class="btn btn-mini btn-danger pull-right">Spam</button>

                          <div class="clearfix"></div>
                        </div>
                      </li>



                      <li>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-mini"><i class="icon-ok"></i> </button>
                            <button class="btn btn-mini"><i class="icon-pencil"></i> </button>
                            <button class="btn btn-mini"><i class="icon-remove"></i> </button>
                          </div>

                          <button class="btn btn-mini btn-danger pull-right">Spam</button>

                          <div class="clearfix"></div>
                        </div>
                      </li>



                      <li>

                        <div class="recent-content">
                          <div class="recent-meta">Posted on 25/1/2120 by Ashok</div>
                          <div>Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          </div>

                          <div class="btn-group">
                            <button class="btn btn-mini"><i class="icon-ok"></i> </button>
                            <button class="btn btn-mini"><i class="icon-pencil"></i> </button>
                            <button class="btn btn-mini"><i class="icon-remove"></i> </button>
                          </div>

                          <button class="btn btn-mini btn-danger pull-right">Spam</button>

                          <div class="clearfix"></div>
                        </div>
                      </li>                                        


                    </ul>

                  </div>
                  <!-- Widget footer -->
                  <div class="widget-foot">
                    
                    <div class="pagination pull-right">
                      <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>

                  </div>
                </div>  

              </div> 

            </div>
          </div>


          <div class="row-fluid">
            <div class="span6">
              <div class="widget wblack">
                <div class="widget-head">
                  <div class="pull-left">Black Chart</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
                   <div id="bar-chart" style="padding: 0px; position: relative;"><canvas class="base" width="328" height="250"></canvas><canvas class="overlay" width="328" height="250" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#777"><div class="tickLabel" style="position:absolute;text-align:center;left:-11px;top:228px;width:54px">0</div><div class="tickLabel" style="position:absolute;text-align:center;left:63px;top:228px;width:54px">5</div><div class="tickLabel" style="position:absolute;text-align:center;left:137px;top:228px;width:54px">10</div><div class="tickLabel" style="position:absolute;text-align:center;left:211px;top:228px;width:54px">15</div><div class="tickLabel" style="position:absolute;text-align:center;left:285px;top:228px;width:54px">20</div></div><div class="yAxis y1Axis" style="color:#777"><div class="tickLabel" style="position:absolute;text-align:right;top:212px;right:317px;width:11px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:176px;right:317px;width:11px">10</div><div class="tickLabel" style="position:absolute;text-align:right;top:139px;right:317px;width:11px">20</div><div class="tickLabel" style="position:absolute;text-align:right;top:103px;right:317px;width:11px">30</div><div class="tickLabel" style="position:absolute;text-align:right;top:66px;right:317px;width:11px">40</div><div class="tickLabel" style="position:absolute;text-align:right;top:30px;right:317px;width:11px">50</div><div class="tickLabel" style="position:absolute;text-align:right;top:-7px;right:317px;width:11px">60</div></div></div></div>

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div> 
            </div>
            <div class="span6">
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Quick Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="control-group">
                                            <label class="control-label" for="title">Title</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" id="title">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="control-group">
                                            <label class="control-label" for="content">Content</label>
                                            <div class="controls">
                                              <textarea class="input-large" id="content"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="control-group">
                                            <label class="control-label">Category</label>
                                            <div class="controls">                               
                                                <select>
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="control-group">
                                            <label class="control-label" for="tags">Tags</label>
                                            <div class="controls">
                                              <input type="text" class="input-large" id="tags">
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-actions">
                                             <!-- Buttons -->
                                            <button type="submit" class="btn btn-info">Publish</button>
                                            <button type="submit" class="btn">Save Draft</button>
                                            <button type="reset" class="btn">Reset</button>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div> 
            </div>            
          </div>  


        </div>
		  </div>

		<!-- Matter ends -->

    </div>
    <!-- Script for this page -->
<script type="text/javascript">
$(function () {

    /* Bar Chart starts */

    var d1 = [];
    for (var i = 0; i <= 20; i += 1)
        d1.push([i, parseInt(Math.random() * 30)]);

    var d2 = [];
    for (var i = 0; i <= 20; i += 1)
        d2.push([i, parseInt(Math.random() * 30)]);


    var stack = 0, bars = true, lines = false, steps = false;
    
    function plotWithOptions() {
        $.plot($("#bar-chart"), [ d1, d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.8 }
            },
            grid: {
                borderWidth: 0, hoverable: true, color: "#777"
            },
            colors: ["#ff6c24", "#ff2424"],
            bars: {
                  show: true,
                  lineWidth: 0,
                  fill: true,
                  fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.8 } ] }
            }
        });
    }

    plotWithOptions();
    
    $(".stackControls input").click(function (e) {
        e.preventDefault();
        stack = $(this).val() == "With stacking" ? true : null;
        plotWithOptions();
    });
    $(".graphControls input").click(function (e) {
        e.preventDefault();
        bars = $(this).val().indexOf("Bars") != -1;
        lines = $(this).val().indexOf("Lines") != -1;
        steps = $(this).val().indexOf("steps") != -1;
        plotWithOptions();
    });

    /* Bar chart ends */

});


/* Curve chart starts */

$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#curve-chart"),
           [ { data: sin, label: "sin(x)"}, { data: cos, label: "cos(x)" } ], {
               series: {
                   lines: { show: true, fill: true},
                   points: { show: true }
               },
               grid: { hoverable: true, clickable: true, borderWidth:0 },
               yaxis: { min: -1.2, max: 1.2 },
               colors: ["#1eafed", "#1eafed"]
             });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #000',
            padding: '2px 8px',
            color: '#ccc',
            'background-color': '#000',
            opacity: 0.9
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#curve-chart").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#enableTooltip:checked").length > 0) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    
                    showTooltip(item.pageX, item.pageY, 
                                item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;            
            }
        }
    }); 

    $("#curve-chart").bind("plotclick", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });

});

/* Curve chart ends */
</script>