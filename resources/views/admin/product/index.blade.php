@extends('admin.layouts.main')
@section('content')
    <div class="card-body">
        <!--begin: Datatable-->
        <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" style="background-color: white">

            <div class="row ">

                <div class="col-sm-12 ml-5">
                    <table class="table table-separate table-head-custom table-hover table-checkable dataTable no-footer dtr-inline"
                           id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1149px;">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 60px;" aria-sort="ascending"
                                aria-label="Record ID: activate to sort column descending"><b>ID</b>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 56px;" aria-label="Order ID: activate to sort column ascending">Order ID
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 86px;" aria-label="Country: activate to sort column ascending">Country
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 86px;" aria-label="Ship City: activate to sort column ascending">Ship City
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 89px;" aria-label="Ship Address: activate to sort column ascending">Ship
                                Address
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 98px;" aria-label="Company Agent: activate to sort column ascending">
                                Company Agent
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 106px;" aria-label="Company Name: activate to sort column ascending">
                                Company Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 66px;" aria-label="Ship Date: activate to sort column ascending">Ship Date
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 75px;" aria-label="Status: activate to sort column ascending">Status
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"
                                style="width: 49px;" aria-label="Type: activate to sort column ascending">Type
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 118px;"
                                aria-label="Actions">Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                            <td>64616-103</td>
                            <td>Brazil</td>
                            <td>São Félix do Xingu</td>
                            <td>698 Oriole Pass</td>
                            <td>Hayes Boule</td>
                            <td>Casper-Kerluke</td>
                            <td style="">10/15/2017</td>
                            <td style=""><span class="label label-lg font-weight-bold label-light-info label-inline">Info</span>
                            </td>
                            <td style=""><span class="label label-danger label-dot mr-2"></span><span
                                    class="font-weight-bold text-danger">Online</span></td>
                            <td nowrap="nowrap" style="">

                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                    <span class="svg-icon svg-icon-md">	                                <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">	                                    <g
                                                stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        <rect
                                                    x="0" y="0" width="24" height="24"></rect>	                                        <path
                                                    d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>	                                        <rect
                                                    fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2"
                                                    rx="1"></rect>	                                    </g>	                                </svg>	                            </span>
                                </a> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                        class="svg-icon svg-icon-md">	                                <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">	                                    <g
                                                stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        <rect
                                                    x="0" y="0" width="24" height="24"></rect>	                                        <path
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>	                                        <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000" opacity="0.3"></path>	                                    </g>	                                </svg>	                            </span>
                                </a></td>
                        </tr>
                        <tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">2</td>
                            <td>54868-3377</td>
                            <td>Vietnam</td>
                            <td>Bình Minh</td>
                            <td>8998 Delaware Court</td>
                            <td>Humbert Bresnen</td>
                            <td>Hodkiewicz and Sons</td>
                            <td style="">4/24/2016</td>
                            <td style=""><span class="label label-lg font-weight-bold label-light-danger label-inline">Delivered</span>
                            </td>
                            <td style=""><span class="label label-primary label-dot mr-2"></span><span
                                    class="font-weight-bold text-primary">Retail</span></td>
                            <td nowrap="nowrap" style="">

                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                    <span class="svg-icon svg-icon-md">	                                <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">	                                    <g
                                                stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        <rect
                                                    x="0" y="0" width="24" height="24"></rect>	                                        <path
                                                    d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>	                                        <rect
                                                    fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2"
                                                    rx="1"></rect>	                                    </g>	                                </svg>	                            </span>
                                </a> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                        class="svg-icon svg-icon-md">	                                <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">	                                    <g
                                                stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        <rect
                                                    x="0" y="0" width="24" height="24"></rect>	                                        <path
                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>	                                        <path
                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000" opacity="0.3"></path>	                                    </g>	                                </svg>	                            </span>
                                </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">

                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_full_numbers" id="kt_datatable_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item first disabled" id="kt_datatable_first"><a href="#"
                                                                                                            aria-controls="kt_datatable"
                                                                                                            data-dt-idx="0"
                                                                                                            tabindex="0"
                                                                                                            class="page-link"><i
                                        class="ki ki-double-arrow-back"></i></a></li>
                            <li class="paginate_button page-item previous disabled" id="kt_datatable_previous"><a
                                    href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0"
                                    class="page-link"><i class="ki ki-arrow-back"></i></a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable"
                                                                      data-dt-idx="3" tabindex="0"
                                                                      class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable"
                                                                      data-dt-idx="4" tabindex="0"
                                                                      class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable"
                                                                      data-dt-idx="5" tabindex="0"
                                                                      class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_datatable"
                                                                      data-dt-idx="6" tabindex="0"
                                                                      class="page-link">5</a></li>
                            <li class="paginate_button page-item next" id="kt_datatable_next"><a href="#"
                                                                                                 aria-controls="kt_datatable"
                                                                                                 data-dt-idx="7"
                                                                                                 tabindex="0"
                                                                                                 class="page-link"><i
                                        class="ki ki-arrow-next"></i></a></li>
                            <li class="paginate_button page-item last" id="kt_datatable_last"><a href="#"
                                                                                                 aria-controls="kt_datatable"
                                                                                                 data-dt-idx="8"
                                                                                                 tabindex="0"
                                                                                                 class="page-link"><i
                                        class="ki ki-double-arrow-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Datatable-->
    </div>
@stop
