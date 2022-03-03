@extends('admin.template')
@section('title', 'Newsletters')
@section('subtitle', 'Liste des emails abonnés ')
@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Liste de tous les abonnés à la newsletter</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="actions">Depuis le </th>



                            </tr>
                        </thead>
                        <tbody>

                            @if (sizeof($emails) == 0)

                            <tr>
<td colspan="2" class='text-center'>Aucun abonné à la newsletter </td>


</tr>
                            @else
                                @foreach ($emails as $email)
                                    <tr>

                                        <td>{{ $email->email }}</td>
                                        <td>{{ $email->created_at }}</td>
                                @endforeach
                            @endif




                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
