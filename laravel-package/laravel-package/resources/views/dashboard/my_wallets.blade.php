{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
	<div class="text-right mb-4">
		<a href="javascript:void(0);" class="btn btn-primary btn-rounded">+ Add Wallet</a>
	</div>
	<div class="cards-slider owl-carousel mb-4">
		<div class="items">
			<div class="wallet-card bg-secondary" style="background-image:url('images/pattern/pattern1.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">Main Wallet</p>
					<span>$45.500,12</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-success" style="background-image:url('images/pattern/pattern2.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">XYZ Wallet</p>
					<span>$250,5</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo2.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-primary" style="background-image:url('images/pattern/pattern3.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">Main Wallet</p>
					<span>$45.500,12</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-info" style="background-image:url('images/pattern/pattern4.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">XYZ Wallet</p>
					<span>$250,5</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo2.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-secondary" style="background-image:url('images/pattern/pattern1.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">Main Wallet</p>
					<span>$45.500,12</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-success" style="background-image:url('images/pattern/pattern2.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">XYZ Wallet</p>
					<span>$250,5</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo2.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-primary" style="background-image:url('images/pattern/pattern3.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">Main Wallet</p>
					<span>$45.500,12</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="items">
			<div class="wallet-card bg-info" style="background-image:url('images/pattern/pattern4.png');">
				<div class="head">
					<p class="fs-14 text-white mb-0 op6 font-w100">XYZ Wallet</p>
					<span>$250,5</span>
				</div>
				<div class="wallet-footer">
					<span class="fs-14">444 221 224 ***</span>
					<img src="{{ asset('images/card-logo2.png') }}" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header d-block d-sm-flex border-0 pb-0">
					<h4 class="mb-0 text-black fs-20">Card Details</h4>
					<div class="d-flex mt-sm-0 mt-2">
						<a href="javascript:void(0);" class="btn-link mr-3 underline">Generate Number</a>
						<a href="javascript:void(0);" class="btn-link underline">Edit</a>
					</div>
				</div>
				<div class="card-body">
					<div class="row align-items-end">
						<div class="col-xl-4 col-xxl-12">
							<div class="row">
								<div class="col-sm-6">
									<div class="mb-4">
										<p class="mb-2">Card Name</p>
										<h4 class="text-black">Main Balance</h4>
									</div>
									<div class="mb-4">
										<p class="mb-2">Valid Date</p>
										<h4 class="text-black">08/21</h4>
									</div>
									<div>
										<p class="mb-2">Card Number</p>
										<h4 class="text-black">**** **** **** 1234</h4>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="mb-4">
										<p class="mb-2">Bank Name</p>
										<h4 class="text-black">ABC Center Bank</h4>
									</div>
									<div class="mb-4">
										<p class="mb-2">Card Holder</p>
										<h4 class="text-black">Marquezz Silalahi</h4>
									</div>
									<div>
										<p class="mb-2">Card Theme</p>
										<div class="btn-group theme-colors" data-toggle="buttons">
											<label class="btn btn-primary btn-sm active"><input type="radio" class="position-absolute invisible" name="options" id="option5"> <i class="las la-check-circle"></i></label>
											<label class="btn btn-warning btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option1" checked=""><i class="las la-check-circle"></i></label>
											<label class="btn btn-success btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option2"> <i class="las la-check-circle"></i></label>
											<label class="btn btn-info btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option3"> <i class="las la-check-circle"></i></label>
											<label class="btn btn-secondary btn-sm"><input type="radio" class="position-absolute invisible" name="options" id="option4"> <i class="las la-check-circle"></i></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-xxl-6 col-lg-6 mb-lg-0 mb-3">
							<p>Monthly Limits</p>
							<div class="row">
								<div class="col-sm-4 mb-sm-0 mb-4 text-center">
									<div class="d-inline-block position-relative donut-chart-sale mb-3">
										<span class="donut1" data-peity='{ "fill": ["rgb(255, 104, 38)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>5/8</span>
										<small class="text-black">66%</small>
									</div>
									<h5 class="fs-18 text-black">Main Limits</h5>
									<span>$10,000</span>
								</div>
								<div class="col-sm-4 mb-sm-0 mb-4 text-center">
									<div class="d-inline-block position-relative donut-chart-sale mb-3">
										<span class="donut1" data-peity='{ "fill": ["rgb(29, 198, 36)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>4/9</span>
										<small class="text-black">31%</small>
									</div>
									<h5 class="fs-18 text-black">Seconds</h5>
									<span>$500</span>
								</div>
								<div class="col-sm-4 text-center">
									<div class="d-inline-block position-relative donut-chart-sale mb-3">
										<span class="donut1" data-peity='{ "fill": ["rgb(158, 158, 158)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>2/8</span>
										<small class="text-black">7%</small>
									</div>
									<h5 class="fs-18 text-black">Others</h5>
									<span>$100</span>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-xxl-6 col-lg-6">
							<div class="d-flex align-items-end">
								<div id="pieChart"></div>
								<div>
									<div class="d-flex mb-4">
										<svg class="mr-sm-3 mr-2 mt-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="14" height="14" rx="4" fill="#5EE173"/>
										</svg>
										<div>
											<p class="fs-14 text-black mb-0">Installment</p>
											<span class="fs-20 text-black font-w600">24%</span>
										</div>
									</div>
									<div class="d-flex">
										<svg class="mr-sm-3 mr-2 mt-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="14" height="14" rx="4" fill="#3A82EF"/>
										</svg>
										<div>
											<p class="fs-14 text-black mb-0">Rent</p>
											<span class="fs-20 text-black font-w600">28%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex mt-4">
								<div class="d-flex mr-3">
									<svg class="mr-sm-3 mr-2 mt-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="14" height="14" rx="4" fill="#FF495F"/>
									</svg>
									<div>
										<p class="fs-14 text-black mb-0">Food</p>
										<span class="fs-20 text-black font-w600">18%</span>
									</div>
								</div>
								<div class="d-flex mr-3">
									<svg class="mr-sm-3 mr-2 mt-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="14" height="14" rx="4" fill="#FFB038"/>
									</svg>
									<div>
										<p class="fs-14 text-black mb-0">Restaurant</p>
										<span class="fs-20 text-black font-w600">21%</span>
									</div>
								</div>
								<div class="d-flex">
									<svg class="mr-sm-3 mr-2 mt-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="14" height="14" rx="4" fill="#EE3CD2"/>
									</svg>
									<div>
										<p class="fs-14 text-black mb-0">Investment</p>
										<span class="fs-20 text-black font-w600">9%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header d-block d-sm-flex border-0 pb-sm-0 pb-0 align-items-center">
							<div class="mr-auto mb-sm-0 mb-3">
								<h4 class="fs-20 text-black">Coin Chart</h4>
								<p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<select class="form-control style-1 default-select ">
								<option>Monthly (2021)</option>
								<option>Daily (2021)</option>
								<option>Weekly (2021)</option>
							</select>
						</div>
						<div class="card-body pt-3">
							<div class="d-flex flex-wrap mb-sm-4 mb-2 align-items-center">
								<p class="mb-0 text-black mr-auto">Last Week <span class="text-success">$563,443</span></p>
								<div class="d-flex align-items-center">
									<span class="fs-28 text-black font-w600 pr-3">$557,235.31</span>
									<span class="fs-22 text-success">7% <i class="fa fa-caret-up scale5 ml-2 text-success" aria-hidden="true"></i></span>
								</div>
							</div>
							<div id="chartTimeline" class="timeline-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="card">
				<div class="card-header pb-2 d-block d-sm-flex flex-wrap border-0">
					<div class="mb-3">
						<h4 class="fs-20 text-black">Wallet Activity</h4>
						<p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
					</div>
					<div class="card-action card-tabs mb-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
									Monthly	
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
									Weekly
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#Today" role="tab">
									Today
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body tab-content p-0">
					<div class="tab-pane active show fade" id="monthly" role="tabpanel">
						<div class="table-responsive">
							<table class="table shadow-hover short-one card-table border-no">
								<tbody>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Withdraw</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td><a class="btn-link text-light float-right" href="javascript:void(0);">Pending</a></td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.232L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66718C13.8269 8.10702 13.8288 7.19681 13.2689 6.63421L12.9145 6.98691L13.2689 6.63421L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.17281 6.92186 1.17469 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63426L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66239L3.51891 8.66236L5.9375 6.232Z" fill="#363062" stroke="#363062"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Topup</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td>
											<a class="btn-link text-success float-right" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Wihtdraw</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-right" href="javascript:void(0);">Canceled</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.232L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66718C13.8269 8.10702 13.8288 7.19681 13.2689 6.63421L12.9145 6.98691L13.2689 6.63421L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.17281 6.92186 1.17469 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63426L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66239L3.51891 8.66236L5.9375 6.232Z" fill="#363062" stroke="#363062"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Topup</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$7,762</span>
										</td>
										<td>
											<a class="btn-link text-success float-right" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.232L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66718C13.8269 8.10702 13.8288 7.19681 13.2689 6.63421L12.9145 6.98691L13.2689 6.63421L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.17281 6.92186 1.17469 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63426L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66239L3.51891 8.66236L5.9375 6.232Z" fill="#363062" stroke="#363062"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Topup</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td>
											<a class="btn-link text-success float-right" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Wihtdraw</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-right" href="javascript:void(0);">Canceled</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane" id="Weekly" role="tabpanel">
						<div class="table-responsive">
							<table class="table shadow-hover short-one  card-table  border-no">
								<tbody>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Bitcoin</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td><a class="btn-link text-success float-right" href="#">Completed</a></td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Ethereum</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$542</span>
										</td>
										<td>
											<a class="btn-link text-dark float-right" href="#">Pending</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Ripple</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-right" href="#">Canceled</a>
										</td>
									</tr>
									
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Ripple</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-right" href="#">Canceled</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane" id="Today" role="tabpanel">
						<div class="table-responsive">
							<table class="table shadow-hover short-one card-table  border-no">
								<tbody>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Bitcoin</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td><a class="btn-link text-success float-right" href="#">Completed</a></td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Ethereum</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$542</span>
										</td>
										<td>
											<a class="btn-link text-dark float-right" href="#">Pending</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Ripple</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">-$912</span>
										</td>
										<td>
											<a class="btn-link text-danger float-right" href="#">Canceled</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Litecoin</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$7,762</span>
										</td>
										<td>
											<a class="btn-link text-success float-right" href="#">Completed</a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="activity-icon">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.81299 21.393L8.81299 2.74998C8.81299 1.95606 8.16942 1.31248 7.37549 1.31248C6.58157 1.31248 5.93799 1.95606 5.93799 2.74998L5.93799 21.393L3.5194 18.9627L3.51938 18.9627C2.95934 18.4 2.0492 18.3978 1.48649 18.9578C0.923597 19.518 0.921712 20.4282 1.48158 20.9908L1.83599 20.6381L1.48158 20.9908L6.35659 25.8894L6.36177 25.8946L6.36345 25.8962C6.92422 26.4522 7.82863 26.4503 8.38748 25.8962L8.38912 25.8947L8.3944 25.8894L13.2694 20.9907L13.2694 20.9907C13.8294 20.428 13.8273 19.5179 13.2645 18.9578C12.7018 18.3977 11.7917 18.3999 11.2316 18.9626L11.2316 18.9626L8.81299 21.393Z" fill="#61C277" stroke="#61C277"/>
												</svg>
											</span>
										</td>
										<td>
											<span class="font-w600 text-black">Bitcoin</span>
										</td>
										<td>
											<span class="text-black">06:24:45 AM</span>
										</td>
										<td>
											<span class="font-w600 text-black">+$5,553</span>
										</td>
										<td>
											<a class="btn-link text-success float-right" href="javascript:void(0);">Completed</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection