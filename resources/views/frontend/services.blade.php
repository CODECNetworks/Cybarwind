@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')

<body class="with-zoom1 case2-header" id="services-page">
   <!-- Header start -->
  
    @include('frontend.layouts.ser-header')
  
   <!-- Header end -->
   <!-- breadcrumbs -->
   <!-- <div class="breadcrumbs">
            <div class="container">
                <div class="col-md-7">
                    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="service2.php">Service 2</a></li>
                    </ol>
                </div>
            </div>
        </div> -->
   <!-- breadcrumbs -->
   <!-- main section-->
   <section class="training-page desktop-view">
      <div class="container">
         <div class="row">
            <!--  -->
            <div class="col-md-3">
               <div class="categories csn sidebar-fixed" id="cd-sidebar-nav">
                  <div class="cc-sidebar">
                     <div class="cat-title1">
                        <h4>Course Categories</h4>
                     </div>
                     <ul class="case1-tab">
                        <li><a href="#ec" class="active">EC Council Certification Programs</a></li>
                        <li><a href="#pecb">PECB Certification Programs</a></li>
                        <li><a href="#isist">Information security industry specialized </a></li>
                        <li><a href="#it">IT / Security Risk, Compliance & Governance</a></li>
                        <li><a href="#datascience">Data Science & Business Analytics</a></li>
                        <li><a href="#dt">Digital Transformation</a></li>
                        <li><a href="#sm">IT Operation, Project & Management</a></li>
                        <li><a href="#server">Server, Storage, Cloud & Virtualization</a></li>
                     </ul>

                     <!--  -->
                     <!--                      <div class="codec-top codec-top-fixed">
                        <div class="codec-top-right">
                           <a href="#myHeader"><i class="fa fa-arrow-up"></i>
                              Back to Top</a>
                        </div>
                     </div> -->
                     <!--  -->
                  </div>
               </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="col-md-9 ser-codec-box" id="code-content">
               <!--  -->
               <div class="codec-content pl-10">
                  <!--  -->
                  <!-- EC Council Accredited Certification Programs start  -->
                  <div id="ec" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">EC Council Accredited Certification Programs</h4>
                              <a href="javascript:void(0)" class="course-btn show-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="/assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="/assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!-- content hide start  -->
                           <div class="content-hide">
                              <div class="row">
                                 <!--  -->
                                 <div class="col-md-4">
                                    <div class="empower-industry-box">
                                       <div class="cn-hover-box">
                                          <div class="cn-hover-img">
                                             <img src="assets/images/vapt-services.jpg">
                                          </div>
                                          <div class="cn-content">
                                             <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                                Applications, block illegal access and protect organizations against
                                                data
                                                theft, productivity loss and fraud.</p>
                                          </div>
                                       </div>
                                       <div class="cn-main-content">
                                          <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                          <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  -->
                                 <div class="col-md-4">
                                    <div class="empower-industry-box">
                                       <div class="cn-hover-box">
                                          <div class="cn-hover-img">
                                             <img src="assets/images/forensic-seervices.jpg">
                                          </div>
                                          <div class="cn-content">
                                             <p>Identify and resolve Ecrime incidents that adversely impact
                                                organizations
                                                with cybercrime / online fraud and proactively manage 24x7 hours
                                                security
                                                risks.</p>
                                          </div>
                                       </div>
                                       <div class="cn-main-content">
                                          <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                          <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  -->
                                 <div class="col-md-4">
                                    <div class="empower-industry-box">
                                       <div class="cn-hover-box">
                                          <div class="cn-hover-img">
                                             <img src="assets/images/soc-services.jpg">
                                          </div>
                                          <div class="cn-content">
                                             <p>Provides round-the-clock proactive event monitoring with prioritized
                                                alert
                                                notification &amp; threat mitigation.</p>
                                          </div>
                                       </div>
                                       <div class="cn-main-content">
                                          <h3>SOC (Security Operation Center) as a Service</h3>
                                          <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  -->
                              </div>
                           </div>
                           <!-- content hide end  -->
                           <div class="hide-btn">
                              <a href="javascript:void(0)">Hide Content</a>
                           </div>
                           <!---->
                        </div>
                     </div>
                  </div>
                  <!-- EC Council Accredited Certification Programs end -->
                  <!-- PECB Accredited Certification Programs start  -->
                  <div id="pecb" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">PECB Accredited Certification Programs</h4>
                              <a href="javascript:void(0)" class="course-btn show-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!-- content hide start  -->
                           <div class="content-hide">
                              <div class="row">
                                 <!--  -->
                                 <div class="col-md-4">
                                    <div class="empower-industry-box">
                                       <div class="cn-hover-box">
                                          <div class="cn-hover-img">
                                             <img src="assets/images/vapt-services.jpg">
                                          </div>
                                          <div class="cn-content">
                                             <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                                Applications, block illegal access and protect organizations against
                                                data
                                                theft, productivity loss and fraud.</p>
                                          </div>
                                       </div>
                                       <div class="cn-main-content">
                                          <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                          <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  -->
                                 <div class="col-md-4">
                                    <div class="empower-industry-box">
                                       <div class="cn-hover-box">
                                          <div class="cn-hover-img">
                                             <img src="assets/images/forensic-seervices.jpg">
                                          </div>
                                          <div class="cn-content">
                                             <p>Identify and resolve Ecrime incidents that adversely impact
                                                organizations
                                                with cybercrime / online fraud and proactively manage 24x7 hours
                                                security
                                                risks.</p>
                                          </div>
                                       </div>
                                       <div class="cn-main-content">
                                          <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                          <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  -->
                                 <div class="col-md-4">
                                    <div class="empower-industry-box">
                                       <div class="cn-hover-box">
                                          <div class="cn-hover-img">
                                             <img src="assets/images/soc-services.jpg">
                                          </div>
                                          <div class="cn-content">
                                             <p>Provides round-the-clock proactive event monitoring with prioritized
                                                alert
                                                notification &amp; threat mitigation.</p>
                                          </div>
                                       </div>
                                       <div class="cn-main-content">
                                          <h3>SOC (Security Operation Center) as a Service</h3>
                                          <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  -->
                              </div>
                           </div>
                           <!-- content hide end  -->
                           <div class="hide-btn">
                              <a href="javascript:void(0)">Hide Content</a>
                           </div>
                           <!---->
                        </div>
                     </div>
                  </div>
                  <!-- PECB Accredited Certification Programs end -->
                  <!-- Information security industry specialized Training start  -->
                  <div id="isist" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">Information security industry specialized Training</h4>
                              <a href="#" class="course-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!---->
                        </div>
                     </div>
                  </div>
                  <!-- Information security industry specialized Training end -->




                  <div id="it" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">IT / Security Risk, Compliance and Governance</h4>
                              <a href="#" class="course-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!---->
                        </div>
                     </div>
                  </div>



                  <div id="datascience" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">Data Science & Business Analytics</h4>
                              <a href="#" class="course-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!---->
                        </div>
                     </div>
                  </div>



                  <div id="dt" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">Digital Transformation</h4>
                              <a href="#" class="course-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!---->
                        </div>
                     </div>
                  </div>




                  <div id="sm" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">IT Operation, Project and Service Management</h4>
                              <a href="#" class="course-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!---->
                        </div>
                     </div>
                  </div>



                  <div id="server" class="tabcontent1 code-div-box">
                     <div class="mrgn-brdr">
                        <div class="row box-wrap">
                           <div class="c-title">
                              <h4 class="cat-title">Server, Storage, Cloud and Virtualization </h4>
                              <a href="#" class="course-btn">View All</a>
                           </div>
                           <!---->
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/vapt-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                                          Applications, block illegal access and protect organizations against data
                                          theft, productivity loss and fraud.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/forensic-seervices.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                                          cybercrime / online fraud and proactively manage 24x7 hours security risks.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <div class="col-md-4">
                              <div class="empower-industry-box">
                                 <div class="cn-hover-box">
                                    <div class="cn-hover-img">
                                       <img src="assets/images/soc-services.jpg">
                                    </div>
                                    <div class="cn-content">
                                       <p>Provides round-the-clock proactive event monitoring with prioritized alert
                                          notification &amp; threat mitigation.</p>
                                    </div>
                                 </div>
                                 <div class="cn-main-content">
                                    <h3>SOC (Security Operation Center) as a Service</h3>
                                    <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!---->
                        </div>
                     </div>
                  </div>

                  <!--  -->
               </div>
               <!--  -->
            </div>
            <!--  -->


         </div>
      </div>
   </section>
   <section class="training-page training-page-m mobile-view">
      <!-- box 1 start  -->
      <div class="m-container" id="m-ec">
         <div class="m-title ">
            <h3>EC Council Certification Programs</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo1" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo2" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count1" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 2 end -->
      </div>
      <!--box 1 end  -->
      <!-- box 2 start  -->
      <div class="m-container ser-bg" id="m-pecb">
         <div class="m-title m-bg1">
            <h3>PECB Certification Programs </h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo3" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count2" class="count-nav-box couter-space"></div>
         </div>

         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo4" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <div id="navigation-count3" class="count-nav-box couter-space"></div>
            <!-- box 1 end -->
         </div>
         <!-- slider 2 end -->
      </div>
      <!--box 2 end  -->
      <!-- box 3 start  -->
      <div class="m-container" id="m-isist">
         <div class="m-title m-bg2">
            <h3>Information security industry specialized</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo5" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count4" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo6" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count5" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 23 end -->
      </div>
      <!--box 3 end  -->
      <!-- box 4 start  -->
      <div class="m-container ser-bg" id="m-it">
         <div class="m-title m-bg3">
            <h3>IT / Security Risk, Compliance & Governance</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo7" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count6" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo8" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count7" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 2 end -->
      </div>
      <!--box 4 end  -->
      <!-- box 5 start  -->
      <div class="m-container" id="m-datascience">
         <div class="m-title m-bg4">
            <h3>Data Science & Business Analytics</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo9" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <div id="navigation-count8" class="count-nav-box couter-space"></div>
            <!-- box 1 end -->
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo10" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <div id="navigation-count9" class="count-nav-box couter-space"></div>
            <!-- box 1 end -->
         </div>
         <!-- slider 23 end -->
      </div>
      <!--box 5 end  -->
      <!-- box 6 start  -->
      <div class="m-container ser-bg" id="m-dt">
         <div class="m-title m-bg5">
            <h3>Digital Transformation</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo11" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <div id="navigation-count10" class="count-nav-box couter-space"></div>
            <!-- box 1 end -->
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo12" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <div id="navigation-count11" class="count-nav-box couter-space"></div>
            <!-- box 1 end -->
         </div>
         <!-- slider 2 end -->
      </div>
      <!--box 6 end  -->
      <!-- box 5 start  -->
      <div class="m-container" id="m-sm">
         <div class="m-title m-bg6">
            <h3>IT Operation, Project & Management</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo13" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <div id="navigation-count12" class="count-nav-box couter-space"></div>
            <!-- box 1 end -->
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo14" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count13" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 23 end -->
      </div>
      <!--box 5 end  -->
      <!-- box 6 start  -->
      <div class="m-container ser-bg" id="m-server">
         <div class="m-title m-bg7">
            <h3>Server, Storage, Cloud & Virtualization</h3>
         </div>
         <!-- slider 1  -->
         <div class="ser-slider1">
            <!-- box 1 start -->
            <div id="ser-demo15" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count14" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 1 end -->
         <!-- slider 2  -->
         <div class="ser-slider2">
            <!-- box 1 start -->
            <div id="ser-demo16" class="owl-carousel owl-theme indu-moblie">
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/vapt-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Services to ensure the Integrity of Information Systems, Softwares &amp;
                              Applications, block illegal access and protect organizations against data
                              theft, productivity loss and fraud.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Vulnerability Assesement &amp; Penetration Testing</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/forensic-seervices.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Identify and resolve Ecrime incidents that adversely impact organizations with
                              cybercrime / online fraud and proactively manage 24x7 hours security risks.
                           </p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>Digital Forensic &amp; Cyber Fraud Management</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
               <div class="item">
                  <div class="empower-industry-box">
                     <div class="cn-hover-box">
                        <div class="cn-hover-img">
                           <img src="assets/images/soc-services.jpg">
                        </div>
                        <div class="cn-content">
                           <p>Provides round-the-clock proactive event monitoring with prioritized alert
                              notification &amp; threat mitigation.</p>
                        </div>
                     </div>
                     <div class="cn-main-content">
                        <h3>SOC (Security Operation Center) as a Service</h3>
                        <a href="{{route('l3-template')}}">Know more <i class="fa"></i></a>
                     </div>
                  </div>
               </div>
               <!--  -->
            </div>
            <!-- box 1 end -->
            <div id="navigation-count15" class="count-nav-box couter-space"></div>
         </div>
         <!-- slider 2 end -->
      </div>
      <!--box 6 end  -->
   </section>
   <!-- main section end -->
   <div class="ser-h"></div>
   <!--  -->
   {{-- <a href="#services-page" class="scrollToTop"><i class="fa fa-arrow-up"></i></a> --}}

   <!--  -->
  
   {{-- @include('frontend.layouts.footer') --}}
  
</body>

@endsection

@push('scripts')

<!-- Jquery code -->

<script src="assets/js/slider.js"></script>
<script type="text/javascript" src="assets/js/common.js?v-1"></script>
<script type="text/javascript" src="assets/js/mobile-menu.js"></script>
<!-- Jquery code -->
<script type="text/javascript">
   function addVersionToFiles() {
      var version = new Date().getTime();
      var links = document.getElementsByTagName('link');
      var scripts = document.getElementsByTagName('script');

      // Add version to CSS files
      for (var i = 0; i < links.length; i++) {
         var href = links[i].getAttribute('href');
         if (href && href.endsWith('.css')) {
            links[i].setAttribute('href', href + '?v=' + version);
         }
      }

      // Add version to script files
      for (var i = 0; i < scripts.length; i++) {
         var src = scripts[i].getAttribute('src');
         if (src) {
            scripts[i].setAttribute('src', src + '?v=' + version);
         }
      }
   }

   window.onload = function () {
      addVersionToFiles();
   };

</script>
<script type="text/javascript">
   $(document).ready(function () {
      $('#cd-sidebar-nav a').bind('click', function (e) {
         e.preventDefault();
         var target = $(this).attr("href");
         $('html, body').stop().animate({
            scrollTop: $(target).offset().top - 80
         }, 600, function () {
            // location.hash = target;
         });return false;
      });

   });

   $(window).scroll(function () {
      var scrollDistance = $(window).scrollTop();
      $('.code-div-box').each(function (i) {
         if ($(this).position().top <= scrollDistance) {
            $('#cd-sidebar-nav a.active').removeClass('active');
            $('#cd-sidebar-nav a').eq(i).addClass('active');
         }
      });
   }).scroll();


   $(document).ready(function () {
      $(".show-btn").click(function () {
         var $container = $(this).closest(".tabcontent1");
         $container.find(".content-hide").show();
         $container.find(".show-btn").hide();
         $container.find(".hide-btn").show();
      });

      $(".hide-btn").click(function () {
         var $container = $(this).closest(".tabcontent1");
         $container.find(".content-hide").hide();
         $container.find(".hide-btn").hide();
         $container.find(".show-btn").show();
      });
   });
</script>
<script type="text/javascript">
   $(function () {
      function initializeCarousel(carouselId, navigationCountId) {
         $("#" + carouselId).owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            navigationText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
            responsive: {
               0: { items: 1 },
               600: { items: 1 },
               900: { items: 1 },
               1200: { items: 3 }
            },
            onInitialized: function (event) {
               updateNavigationCount(event, navigationCountId);
            },
            onChanged: function (event) {
               updateNavigationCount(event, navigationCountId);
            }
         });
      }

      function updateNavigationCount(event, navigationCountId) {
         if (!event.namespace) {
            return;
         }
         var carousel = event.relatedTarget;
         $("#" + navigationCountId).html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
      }

      initializeCarousel("ser-demo1", "navigation-count");
      initializeCarousel("ser-demo2", "navigation-count1");
      initializeCarousel("ser-demo3", "navigation-count2");
      initializeCarousel("ser-demo4", "navigation-count3");
      initializeCarousel("ser-demo5", "navigation-count4");
      initializeCarousel("ser-demo6", "navigation-count5");
      initializeCarousel("ser-demo7", "navigation-count6");
      initializeCarousel("ser-demo8", "navigation-count7");
      initializeCarousel("ser-demo9", "navigation-count8");
      initializeCarousel("ser-demo10", "navigation-count9");
      initializeCarousel("ser-demo11", "navigation-count10");
      initializeCarousel("ser-demo12", "navigation-count11");
      initializeCarousel("ser-demo13", "navigation-count12");
      initializeCarousel("ser-demo14", "navigation-count13");
      initializeCarousel("ser-demo15", "navigation-count14");
      initializeCarousel("ser-demo16", "navigation-count15");
   });

</script>

@endpush

@include('frontend.layouts.right-menu-js')

