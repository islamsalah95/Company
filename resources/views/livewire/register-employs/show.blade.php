<div class="table-responsive text-nowrap" id="myTabel">
    <div class="card-header flex-column flex-md-row" id="hide">
        <div class="dt-action-buttons text-end pt-3 pt-md-0">
            <div class="dt-buttons btn-group flex-wrap">
                <div class="btn-group">
                    <button onclick="printDiv()" class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="ti ti-file-export me-sm-1">
                            </i> <span class="d-none d-sm-inline-block">Print</span></span><span class="dt-down-arrow"></span>
                    </button>
                </div>

                <div class="btn-group">
                    <button onclick="exportToExcel('Emplys')" class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="ti ti-file-export me-sm-1">
                            </i> <span class="d-none d-sm-inline-block">Export</span></span><span class="dt-down-arrow"></span>
                    </button>
                </div>

                <div class="btn-group">
                    <a href="{{ route('users.createEmploys') }}" class="btn btn-secondary create-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                        <span><i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span>
                    </a>
                </div>

                <div class="btn-group" style="width: 10px;">
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="DataTables_Table_0_length">
                    <label>Show
                        <select wire:model.live="select" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                            <option value="5">5</option>
                            <option value="7">7</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:
                        <input type="search" wire:model.live="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0">
                    </label></div>
            </div>
        </div>
    </div>

    {{--  {{ dd(json_encode($registerEmploys)) }}  --}}
    {{--  @php
    $jsonResponse =json_encode($registerEmploys);
    $arrayResponse = json_decode($jsonResponse, true);
    dd($arrayResponse);
    @endphp  --}}

    <table class="datatables-basic table dataTable no-footer dtr-column collapsed" id="excelTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Contact</th>
                <th>Certificate</th>
                <th>Job</th>
                <th>Contract Expiration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($registerEmploys as $registerEmploy)
            <tr>
                <th>{{ $registerEmploy['id'] }}</th>
                <th>{{ $registerEmploy['name'] }}</th>
                <th>{{ $registerEmploy['email'] }}</th>
                <th>{{ $registerEmploy['birthday'] }}</th>
                <th>{{ $registerEmploy['contact1'] }}</th>
                <th>{{ $registerEmploy->qualification->name }}</th>
                <th>{{ $registerEmploy->title->job_en }}</th>
                
                <th>
                @if ($registerEmploy->expiration($registerEmploy['id']))
                <span class="badge bg-label-primary me-1">
                    <i class="fas fa-check-circle"></i> <!-- Font Awesome icon for active status -->
                    Not Expired
                </span>
                @else
                    <span class="badge bg-label-primary me-1">
                        <i class="fas fa-times-circle"></i> <!-- Font Awesome icon for inactive status -->
                        Expired
                    </span>
                @endif
               </th>
               
                <td>
                    @if ($registerEmploy['status'] == 1)
                    <span class="badge bg-label-primary me-1">
                        <i class="fas fa-check-circle"></i> <!-- Font Awesome icon for active status -->
                        Active
                    </span>
                    @else
                    <span class="badge bg-label-primary me-1">
                        <i class="fas fa-times-circle"></i> <!-- Font Awesome icon for inactive status -->
                        Inactive
                    </span>
                    @endif
                </td>

                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu">



                            <a class="dropdown-item" href="{{ route('users.show', ['user' => $registerEmploy->id]) }}">
                                <i class="ti ti-pencil me-1"></i> Edit
                            </a>

                            <a class="dropdown-item" href="#" wire:click.prevent="delete({{ $registerEmploy->id }})" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-form-{{ $registerEmploy->id }}').submit(); }">
                                <i class="ti ti-trash me-1"></i> Delete
                            </a>

                            <a class="dropdown-item" href="#" wire:click.prevent="changeStatus({{ $registerEmploy->id }})" onclick="event.preventDefault(); if(confirm('Are you sure you want to change this user?')) { document.getElementById('block-form-{{ $registerEmploy->id }}').submit(); }">
                                <i class="fab fa-500px mb-2"></i> Change Status
                            </a>
                            @if(Auth::user()->department==5)
                            <a class="dropdown-item" href="{{ route('contracts.create', ['user' => $registerEmploy->id]) }}">
                                <i class="ti ti-pencil me-1"></i> add Contract
                            </a>
                            @endif

                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                Showing {{ $registerEmploys->firstItem() }} to {{ $registerEmploys->lastItem() }} of {{ $registerEmploys->total() }} entries
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    <li class="paginate_button page-item {{ $registerEmploys->onFirstPage() ? 'disabled' : '' }}" id="DataTables_Table_0_previous">
                        <a href="{{ $registerEmploys->previousPageUrl() }}" aria-controls="DataTables_Table_0" aria-disabled="{{ $registerEmploys->onFirstPage() ? 'true' : 'false' }}" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a>
                    </li>
    
                    <!-- Pagination Elements -->
                    @for ($i = 1; $i <= $registerEmploys->lastPage(); $i++)
                        <li class="paginate_button page-item {{ $i == $registerEmploys->currentPage() ? 'active' : '' }}">
                            <a href="{{ $registerEmploys->url($i) }}" aria-controls="DataTables_Table_0" role="link" aria-current="{{ $i == $registerEmploys->currentPage() ? 'page' : '' }}" data-dt-idx="{{ $i }}" tabindex="0" class="page-link">{{ $i }}</a>
                        </li>
                    @endfor
    
                    <!-- Next Page Link -->
                    <li class="paginate_button page-item {{ $registerEmploys->hasMorePages() ? '' : 'disabled' }}" id="DataTables_Table_0_next">
                        <a href="{{ $registerEmploys->nextPageUrl() }}" aria-controls="DataTables_Table_0" aria-disabled="{{ $registerEmploys->hasMorePages() ? 'false' : 'true' }}" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div style="width: 1%;"></div>
    <div style="width: 1%;"></div>
</div>