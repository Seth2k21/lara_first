@extends('layout/template')



            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Structures</h1>
                </div>

                <div class="col-auto">
                    <a class="btn app-btn-secondary" href="{{ route('entreprises.create') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                        </svg>
                            Ajouter
                    </a>
                </div>
            </div><!--//row-->


            @if(Session::get('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
            @endif


            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                          <th>Raison sociale</th>
                                          <th>IFU</th>
                                          <th>action1</th>
                                          <th>action2</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @forelse ($entreprises as $entreprise)
                                        <tr>
                                            <td>{{ $entreprise->raison_sociale }}</td>
                                            <td>{{ $entreprise->ifu }}</td>
                                            <td>
                                              <a href="{{ route('entreprises.edit') }}" class="btn btn-sm btn-outline-success">Edit</a>
                                            </td>
                                            <td>
                                              <a href="{{route('entreprises.destroy')}}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Etes-vous sûr de vouloir supprimer cette structure?')">delete</a>
                                            </td>
                                        </tr>

                                        @empty

                                        <tr>
                                         <td class="cell" colspan="2">AucunE structure ajouté</td>

                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->


                    </nav><!--//app-pagination-->
                </div><!--//tab-pane-->


            </div><!--//tab-content-->


</div><!--//app-wrapper-->



