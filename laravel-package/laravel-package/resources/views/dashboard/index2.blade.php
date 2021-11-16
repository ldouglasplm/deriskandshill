{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="overflow-hidden bg-transparent dz-crypto-scroll shadow-none">
                <div class="js-conveyor-example">
                    <ul class="crypto-list" id="crypto-webticker">
                        <li>
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center">
                                    <div class="mr-4">
                                        <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success" aria-hidden="true"></i>4%(30 days)</p>
                                        <h2 class="text-black mb-0 font-w600">$65,123</h2>
                                    </div>
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.5 16.5002C28.4986 14.844 27.156 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.156 19.4985 28.4986 18.1559 28.5 16.5002Z" fill="#FFAB2D"/>
                                        <path d="M16.5002 28.5H25.5003C27.1569 28.5 28.5 27.157 28.5 25.5003C28.5 23.8432 27.1569 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"/>
                                        <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9866 9.40762 32.5924 0.0133972 21 0.00012207ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4998V32.9998C25.5003 33.8284 24.8283 34.4999 24.0002 34.4999C23.1716 34.4999 22.5001 33.8284 22.5001 32.9998V31.4998H19.5004V32.9998C19.5004 33.8284 18.8284 34.4999 18.0003 34.4999C17.1717 34.4999 16.5002 33.8284 16.5002 32.9998V31.4998H12.0004C11.1718 31.4998 10.5003 30.8282 10.5003 30.0001C10.5003 29.1716 11.1718 28.5 12.0004 28.5H13.5V13.5H12.0004C11.1718 13.5 10.5003 12.8285 10.5003 11.9999C10.5003 11.1714 11.1718 10.4998 12.0004 10.4998H16.5002V9.00021C16.5002 8.17166 17.1717 7.50012 18.0003 7.50012C18.8288 7.50012 19.5004 8.17166 19.5004 9.00021V10.4998H22.5001V9.00021C22.5001 8.17166 23.1716 7.50012 24.0002 7.50012C24.8287 7.50012 25.5003 8.17166 25.5003 9.00021V10.4998C28.7998 10.4861 31.486 13.1494 31.5002 16.4489C31.5075 18.1962 30.7499 19.8593 29.4265 21C30.7375 22.128 31.4942 23.77 31.5002 25.4998Z" fill="#FFAB2D"/>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center">
                                    <div class="mr-4">
                                        <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger" aria-hidden="true"></i>4%(30 days)</p>
                                        <h2 class="text-black mb-0 font-w600">$65,123</h2>
                                    </div>
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM12.3281 19.4999H18.328C19.1566 19.4999 19.8281 20.1715 19.8281 21C19.8281 21.8286 19.1566 22.5001 18.328 22.5001H12.3281C11.4996 22.5001 10.828 21.8286 10.828 21C10.828 20.1715 11.5 19.4999 12.3281 19.4999ZM31.0841 17.3658L29.28 26.392C28.8552 28.4872 27.0155 29.9951 24.8777 30.0001H12.3281C11.4996 30.0001 10.828 29.3286 10.828 28.5C10.828 27.6715 11.5 26.9999 12.3281 26.9999H24.8777C25.5868 26.9981 26.197 26.4982 26.338 25.8033L28.1425 16.7772C28.3027 15.9715 27.7799 15.1887 26.9747 15.0285C26.8791 15.0097 26.782 15.0001 26.685 15.0001H15.3283C14.4998 15.0001 13.8282 14.3286 13.8282 13.5C13.8282 12.6715 14.4998 11.9999 15.3283 11.9999H26.685C29.1633 12.0009 31.1715 14.01 31.1711 16.4883C31.1711 16.7827 31.1418 17.0765 31.0841 17.3658Z" fill="#3693FF"/>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center">
                                    <div class="mr-4">
                                        <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger" aria-hidden="true"></i>4%(30 days)</p>
                                        <h2 class="text-black mb-0 font-w600">$65,123</h2>
                                    </div>
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM26.9999 30.0001H22.5001V34.4999C22.5001 35.3285 21.8286 36 21 36C20.1714 36 19.4999 35.3285 19.4999 34.4999V30.0001H15.0001C14.1715 30.0006 13.4995 29.3295 13.4991 28.5009C13.4991 28.1599 13.6149 27.8289 13.8282 27.5625L23.8784 15.0001H15.0001C14.1715 15.0001 13.5 14.3286 13.5 13.5C13.5 12.6715 14.1715 11.9999 15.0001 11.9999H19.4999V7.50012C19.4999 6.67157 20.1714 6.00003 21 6.00003C21.8286 6.00003 22.5001 6.67203 22.5001 7.50012V11.9999H26.9999C27.8294 12.0013 28.5005 12.6747 28.4995 13.5037C28.4991 13.8429 28.3833 14.1725 28.1718 14.4375L18.1216 26.9999H26.9999C27.8285 26.9999 28.5 27.6719 28.5 28.5C28.5 29.3286 27.8285 30.0001 26.9999 30.0001Z" fill="#5B5D81"/>
                                    </svg>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center">
                                    <div class="mr-4">
                                        <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success" aria-hidden="true"></i>4%(30 days)</p>
                                        <h2 class="text-black mb-0 font-w600">$65,123</h2>
                                    </div>
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5566 23.893C21.1991 24.0359 20.8009 24.0359 20.4434 23.893L16.6064 22.3582L21 31.1454L25.3936 22.3582L21.5566 23.893Z" fill="#AC4CBC"/>
                                        <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#AC4CBC"/>
                                        <path d="M21 0.00012207C9.40213 0.00012207 0.00012207 9.40213 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.0701 36.2124 20.3294 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1583 20.171C11.9253 19.7032 11.9519 19.1479 12.2284 18.7043L19.7284 6.70453C20.2269 6.00232 21.1996 5.83661 21.9018 6.33511C22.0451 6.43674 22.1701 6.56125 22.2717 6.70453L29.7712 18.7043C30.0482 19.1479 30.0747 19.7032 29.8417 20.171Z" fill="#AC4CBC"/>
                                    </svg>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-6 col-lg-6">	
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5566 23.893C21.1991 24.0359 20.8009 24.0359 20.4434 23.893L16.6064 22.3582L21 31.1454L25.3936 22.3582L21.5566 23.893Z" fill="#AC4CBC"></path>
                        <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#AC4CBC"></path>
                        <path d="M21 0.00012207C9.40213 0.00012207 0.00012207 9.40213 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.0701 36.2124 20.3294 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1583 20.171C11.9253 19.7032 11.9519 19.1479 12.2284 18.7043L19.7284 6.70453C20.2269 6.00232 21.1996 5.83661 21.9018 6.33511C22.0451 6.43674 22.1701 6.56125 22.2717 6.70453L29.7712 18.7043C30.0482 19.1479 30.0747 19.7032 29.8417 20.171Z" fill="#AC4CBC"></path>
                    </svg>
                    <div class="ml-3">
                        <h2 class="text-black fs-20 mb-0 font-w600">Digital Cash</h2>
                        <span>ETH (USD) = $148.46 (<span class="text-danger">-12.24%</span>)</span>
                    </div>
                </div>
                <div id="widget-chart1"></div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-6 col-lg-6">	
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.5 16.5002C28.4986 14.844 27.156 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.156 19.4985 28.4986 18.1559 28.5 16.5002Z" fill="#FFAB2D"></path>
                        <path d="M16.5002 28.5H25.5003C27.1569 28.5 28.5 27.157 28.5 25.5003C28.5 23.8432 27.1569 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"></path>
                        <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9866 9.40762 32.5924 0.0133972 21 0.00012207ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4998V32.9998C25.5003 33.8284 24.8283 34.4999 24.0002 34.4999C23.1716 34.4999 22.5001 33.8284 22.5001 32.9998V31.4998H19.5004V32.9998C19.5004 33.8284 18.8284 34.4999 18.0003 34.4999C17.1717 34.4999 16.5002 33.8284 16.5002 32.9998V31.4998H12.0004C11.1718 31.4998 10.5003 30.8282 10.5003 30.0001C10.5003 29.1716 11.1718 28.5 12.0004 28.5H13.5V13.5H12.0004C11.1718 13.5 10.5003 12.8285 10.5003 11.9999C10.5003 11.1714 11.1718 10.4998 12.0004 10.4998H16.5002V9.00021C16.5002 8.17166 17.1717 7.50012 18.0003 7.50012C18.8288 7.50012 19.5004 8.17166 19.5004 9.00021V10.4998H22.5001V9.00021C22.5001 8.17166 23.1716 7.50012 24.0002 7.50012C24.8287 7.50012 25.5003 8.17166 25.5003 9.00021V10.4998C28.7998 10.4861 31.486 13.1494 31.5002 16.4489C31.5075 18.1962 30.7499 19.8593 29.4265 21C30.7375 22.128 31.4942 23.77 31.5002 25.4998Z" fill="#FFAB2D"></path>
                    </svg>
                    <div class="ml-3">
                        <h2 class="text-black fs-20 mb-0 font-w600">Digital Cash</h2>
                        <span>BTC (USD) = $45.81 (<span class="text-success">+12.24%</span>)</span>
                    </div>
                </div>
                <div id="widget-chart2"></div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-12">	
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM12.3281 19.4999H18.328C19.1566 19.4999 19.8281 20.1715 19.8281 21C19.8281 21.8286 19.1566 22.5001 18.328 22.5001H12.3281C11.4996 22.5001 10.828 21.8286 10.828 21C10.828 20.1715 11.5 19.4999 12.3281 19.4999ZM31.0841 17.3658L29.28 26.392C28.8552 28.4872 27.0155 29.9951 24.8777 30.0001H12.3281C11.4996 30.0001 10.828 29.3286 10.828 28.5C10.828 27.6715 11.5 26.9999 12.3281 26.9999H24.8777C25.5868 26.9981 26.197 26.4982 26.338 25.8033L28.1425 16.7772C28.3027 15.9715 27.7799 15.1887 26.9747 15.0285C26.8791 15.0097 26.782 15.0001 26.685 15.0001H15.3283C14.4998 15.0001 13.8282 14.3286 13.8282 13.5C13.8282 12.6715 14.4998 11.9999 15.3283 11.9999H26.685C29.1633 12.0009 31.1715 14.01 31.1711 16.4883C31.1711 16.7827 31.1418 17.0765 31.0841 17.3658Z" fill="#3693FF"></path>
                    </svg>
                    <div class="ml-3">
                        <h2 class="text-black fs-20 mb-0 font-w600">Digital Cash</h2>
                        <span>DASH (USD) = $148.46 (<span class="text-danger">-12.24%</span>)</span>
                    </div>
                </div>
                <div id="widget-chart3"></div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-12">
            <div class="card">
                <div class="card-header d-block border-0 pb-0">
                    <h2 class="card-title mb-1">Market Info</h2>
                    <p class="fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="card-body py-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5566 23.893C21.1991 24.0359 20.8009 24.0359 20.4434 23.893L16.6064 22.3582L21 31.1454L25.3936 22.3582L21.5566 23.893Z" fill="#AC4CBC"></path>
                                <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#AC4CBC"></path>
                                <path d="M21 0.00012207C9.40213 0.00012207 0.00012207 9.40213 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.0701 36.2124 20.3294 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1583 20.171C11.9253 19.7032 11.9519 19.1479 12.2284 18.7043L19.7284 6.70453C20.2269 6.00232 21.1996 5.83661 21.9018 6.33511C22.0451 6.43674 22.1701 6.56125 22.2717 6.70453L29.7712 18.7043C30.0482 19.1479 30.0747 19.7032 29.8417 20.171Z" fill="#AC4CBC"></path>
                            </svg>
                            <div class="w-100 ml-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-black font-w600">ETH/USD</p>
                                    <span class="ml-auto fs-15 mb-0  text-black font-w600">$10,245.00</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-success tx-13"><i class="fa fa-caret-up mr-1"></i>2.04%</span>
                                    <small class="text-muted ml-auto">340.5 USD</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM12.3281 19.4999H18.328C19.1566 19.4999 19.8281 20.1715 19.8281 21C19.8281 21.8286 19.1566 22.5001 18.328 22.5001H12.3281C11.4996 22.5001 10.828 21.8286 10.828 21C10.828 20.1715 11.5 19.4999 12.3281 19.4999ZM31.0841 17.3658L29.28 26.392C28.8552 28.4872 27.0155 29.9951 24.8777 30.0001H12.3281C11.4996 30.0001 10.828 29.3286 10.828 28.5C10.828 27.6715 11.5 26.9999 12.3281 26.9999H24.8777C25.5868 26.9981 26.197 26.4982 26.338 25.8033L28.1425 16.7772C28.3027 15.9715 27.7799 15.1887 26.9747 15.0285C26.8791 15.0097 26.782 15.0001 26.685 15.0001H15.3283C14.4998 15.0001 13.8282 14.3286 13.8282 13.5C13.8282 12.6715 14.4998 11.9999 15.3283 11.9999H26.685C29.1633 12.0009 31.1715 14.01 31.1711 16.4883C31.1711 16.7827 31.1418 17.0765 31.0841 17.3658Z" fill="#3693FF"></path>
                            </svg>
                            <div class="w-100 ml-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-black font-w600">DASH/USD</p>
                                    <span class="ml-auto fs-15 mb-0  text-black font-w600">$7,245.00</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-danger tx-13"><i class="fa fa-caret-down mr-1"></i>1.25%</span>
                                    <small class="text-muted ml-auto">300.5 USD</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.5 16.5002C28.4986 14.844 27.156 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.156 19.4985 28.4986 18.1559 28.5 16.5002Z" fill="#FFAB2D"></path>
                                <path d="M16.5002 28.5H25.5003C27.1569 28.5 28.5 27.157 28.5 25.5003C28.5 23.8432 27.1569 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"></path>
                                <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9866 9.40762 32.5924 0.0133972 21 0.00012207ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4998V32.9998C25.5003 33.8284 24.8283 34.4999 24.0002 34.4999C23.1716 34.4999 22.5001 33.8284 22.5001 32.9998V31.4998H19.5004V32.9998C19.5004 33.8284 18.8284 34.4999 18.0003 34.4999C17.1717 34.4999 16.5002 33.8284 16.5002 32.9998V31.4998H12.0004C11.1718 31.4998 10.5003 30.8282 10.5003 30.0001C10.5003 29.1716 11.1718 28.5 12.0004 28.5H13.5V13.5H12.0004C11.1718 13.5 10.5003 12.8285 10.5003 11.9999C10.5003 11.1714 11.1718 10.4998 12.0004 10.4998H16.5002V9.00021C16.5002 8.17166 17.1717 7.50012 18.0003 7.50012C18.8288 7.50012 19.5004 8.17166 19.5004 9.00021V10.4998H22.5001V9.00021C22.5001 8.17166 23.1716 7.50012 24.0002 7.50012C24.8287 7.50012 25.5003 8.17166 25.5003 9.00021V10.4998C28.7998 10.4861 31.486 13.1494 31.5002 16.4489C31.5075 18.1962 30.7499 19.8593 29.4265 21C30.7375 22.128 31.4942 23.77 31.5002 25.4998Z" fill="#FFAB2D"></path>
                            </svg>
                            <div class="w-100 ml-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-black font-w600">BTC/USD</p>
                                    <span class="ml-auto fs-15 mb-0  text-black font-w600">$10,245.00</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-success tx-13"><i class="fa fa-caret-up mr-1"></i>2.04%</span>
                                    <small class="text-muted ml-auto">340.5 USD</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex px-0 justify-content-between align-items-center">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 0.00012207C9.4021 0.00012207 9.15527e-05 9.40213 9.15527e-05 21C9.15527e-05 32.5979 9.4021 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM26.9999 30.0001H22.5001V34.4999C22.5001 35.3285 21.8286 36 21 36C20.1714 36 19.4999 35.3285 19.4999 34.4999V30.0001H15.0001C14.1715 30.0006 13.4995 29.3295 13.4991 28.5009C13.4991 28.1599 13.6149 27.8289 13.8282 27.5625L23.8784 15.0001H15.0001C14.1715 15.0001 13.5 14.3286 13.5 13.5C13.5 12.6715 14.1715 11.9999 15.0001 11.9999H19.4999V7.50012C19.4999 6.67157 20.1714 6.00003 21 6.00003C21.8286 6.00003 22.5001 6.67203 22.5001 7.50012V11.9999H26.9999C27.8294 12.0013 28.5005 12.6747 28.4995 13.5037C28.4991 13.8429 28.3833 14.1725 28.1718 14.4375L18.1216 26.9999H26.9999C27.8285 26.9999 28.5 27.6719 28.5 28.5C28.5 29.3286 27.8285 30.0001 26.9999 30.0001Z" fill="#5B5D81"></path>
                            </svg>
                            <div class="w-100 ml-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-black font-w600">BTC/USD</p>
                                    <span class="ml-auto fs-15 mb-0  text-black font-w600">$10,245.00</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-success tx-13"><i class="fa fa-caret-up mr-1"></i>2.04%</span>
                                    <small class="text-muted ml-auto">340.5 USD</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer pt-0 pb-0 text-center">
                    <div class="row">
                        <div class="col-4 pt-3 pb-3 border-right">
                            <h3 class="mb-1 text-primary">150</h3>
                            <span>Projects</span>
                        </div>
                        <div class="col-4 pt-3 pb-3 border-right">
                            <h3 class="mb-1 text-primary">140</h3>
                            <span>Uploads</span>
                        </div>
                        <div class="col-4 pt-3 pb-3">
                            <h3 class="mb-1 text-primary">45</h3>
                            <span>Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-xxl-12">
            <div class="card">
                <div class="card-header pb-0 d-block d-sm-flex flex-wrap border-0 align-items-center">
                    <div class="mr-auto mb-3">
                        <h4 class="fs-20 text-black">Coin Chart</h4>
                        <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-primary light btn-rounded mr-3  mb-3"><i class="las la-download scale5 mr-2"></i>Get Report</a>
                    <div class="input-group detault-daterange mr-3  mb-3" >
                        <span class="input-group-text"><i class="las la-calendar"></i></span>
                        <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="04/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                    </div>
                    <select class="form-control style-1 default-select  mb-3">
                        <option>USD ($ US Dollar)</option>
                        <option>BTC ($ US Dollar)</option>
                        <option>USD ($ US Dollar)</option>
                    </select>
                </div>
                <div class="card-body pb-0 pt-sm-3 pt-0">
                    <div class="row sp20 mb-4 align-items-center">
                        <div class="col-lg-8 col-xxl-12 d-flex flex-wrap justify-content-between align-items-center">
                            <div class="px-2 info-group">
                                <p class="fs-18 mb-1">Price</p>
                                <h2 class="fs-28 font-w600 text-black">$11,898.15</h2>
                            </div>
                            <div class="px-2 info-group">
                                <p class="fs-14 mb-1">24h% change</p>
                                <h3 class="fs-20 font-w600 text-success">1.64%
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7L7.00001 -8.77983e-06L14 7H7.00001H0Z" fill="#2BC155"></path>
                                    </svg>
                                </h3>
                            </div>
                            <div class="px-2 info-group">
                                <p class="fs-14 mb-1">Volume (24h)</p>
                                <h3 class="fs-20 font-w600 text-black">$47.22B</h3>
                            </div>
                            <div class="px-2 info-group">
                                <p class="fs-14 mb-1">Market Cap</p>
                                <h3 class="fs-20 font-w600 text-black">$219.24B</h3>
                            </div>
                        </div>
                        <div class="d-flex col-lg-4 col-xxl-12 align-items-center mt-sm-0 mt-3 justify-content-center">
                            <div class="fs-18 font-w600 mr-4">
                                <span class="text-success pr-3">BUY</span>
                                <span class="text-black">$5,673</span>
                            </div>
                            <div class="fs-18 font-w600">
                                <span class="text-danger pr-3">SELL</span>
                                <span class="text-black">$5,982</span>
                            </div>
                        </div>
                    </div>
                    <div id="chartBarRunning" class="bar-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-sm-flex d-block pb-0 border-0">
                    <div>
                        <h4 class="fs-20 text-black">Quick Transfer</h4>
                        <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0 mb-0">
                        <div class="btn btn-rounded border border-info btn-sm d-flex align-items-center svg-btn" role="button" data-toggle="dropdown" aria-expanded="false">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 0C9.40205 0 0 9.40205 0 21C0 32.5979 9.40205 42 21 42C32.5979 42 42 32.5979 42 21C41.9872 9.40754 32.5925 0.0128174 21 0ZM12.3281 19.4999H18.328C19.1566 19.4999 19.8281 20.1714 19.8281 21C19.8281 21.8286 19.1566 22.5001 18.328 22.5001H12.3281C11.4995 22.5001 10.828 21.8286 10.828 21C10.828 20.1714 11.5 19.4999 12.3281 19.4999ZM31.0841 17.3658L29.2801 26.392C28.8553 28.4872 27.0155 29.9951 24.8777 30.0001H12.3281C11.4995 30.0001 10.828 29.3286 10.828 28.5C10.828 27.6715 11.5 26.9999 12.3281 26.9999H24.8777C25.5868 26.9981 26.197 26.4982 26.338 25.8033L28.1425 16.7771C28.3027 15.9714 27.78 15.1887 26.9748 15.0284C26.8791 15.0097 26.782 15.0001 26.685 15.0001H15.3283C14.4997 15.0001 13.8282 14.3285 13.8282 13.5C13.8282 12.6714 14.4997 11.9999 15.3283 11.9999H26.685C29.1633 12.0008 31.1716 14.0099 31.1711 16.4883C31.1711 16.7826 31.1418 17.0765 31.0841 17.3658Z" fill="#3693FF"></path>
                            </svg>
                            <div class="text-left mr-3 ml-3">
                                <span class="d-block fs-16 text-black">45,662.05 DASH</span>
                            </div>
                            <i class="fa fa-angle-down scale5 mr-3 ml-3"></i>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0);">345,455 DASH</a>
                            <a class="dropdown-item" href="javascript:void(0);">789,123 DASH</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-wrapper">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Amount BTC</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0,000000">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text ">Price BPL</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0,000000">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Fee (1%)</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0,000000">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Total BPL</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="0,000000">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn d-block btn-lg btn-success">
                                        BUY
                                        <svg class="ml-4 scale3" width="16" height="16" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z" fill="white" stroke="white"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn d-block btn-lg btn-danger">
                                        SELL
                                        <svg class="ml-4 scale5" width="16" height="16" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z" fill="white" stroke="white"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="custom-control custom-checkbox mr-3 mt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox13" required="">
                                    <label class="custom-control-label" for="customCheckBox13"></label>
                                </div>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="mb-0 text-black fs-20">Sell Order</h4>
                            <div class="dropdown ml-auto">
                                <div class="btn-link" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table text-center bg-info-hover tr-rounded">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Price</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">82.3</td>
                                            <td>0.15</td>
                                            <td class="text-right">$134,12</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">83.9</td>
                                            <td>0.18</td>
                                            <td class="text-right">$237,31</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">84.2</td>
                                            <td>0.25</td>
                                            <td class="text-right">$252,58</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">86.2</td>
                                            <td>0.35</td>
                                            <td class="text-right">$126,26</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">91.6</td>
                                            <td>0.75</td>
                                            <td class="text-right">$46,92</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">92.6</td>
                                            <td>0.21</td>
                                            <td class="text-right">$123,27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">93.9</td>
                                            <td>0.55</td>
                                            <td class="text-right">$212,56</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">94.2</td>
                                            <td>0.18</td>
                                            <td class="text-right">$129,26</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0 text-center">
                            <a href="javascript:void(0);" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="mb-0 text-black fs-20">Buy Order</h4>
                            <div class="dropdown ml-auto">
                                <div class="btn-link" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table text-center bg-info-hover tr-rounded">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Price</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">82.3</td>
                                            <td>0.15</td>
                                            <td class="text-right">$134,12</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">83.9</td>
                                            <td>0.18</td>
                                            <td class="text-right">$237,31</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">84.2</td>
                                            <td>0.25</td>
                                            <td class="text-right">$252,58</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">86.2</td>
                                            <td>0.35</td>
                                            <td class="text-right">$126,26</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">91.6</td>
                                            <td>0.75</td>
                                            <td class="text-right">$46,92</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">92.6</td>
                                            <td>0.21</td>
                                            <td class="text-right">$123,27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">93.9</td>
                                            <td>0.55</td>
                                            <td class="text-right">$212,56</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">94.2</td>
                                            <td>0.18</td>
                                            <td class="text-right">$129,26</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0 text-center">
                            <a href="javascript:void(0);" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection			