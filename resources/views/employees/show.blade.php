
@extends('layouts.app')

@section('content')

    <div style="margin:0 100px;" >

        <h2>Employees (<?=$employees->total()?>)</h2>

        <div class="text-left">
            <button onclick="location.href='/employees/add'" class="btn btn-secondary" >Add a new employee</button>
        </div>

        @include('partials.flash')

        <?php if (isset($employees) && !empty($employees) && $employees->total()>0 ): ?>
            <table id="id-companies" class="table table-hover display" style="width:100%; margin: 20px 0;">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($employees as $employee): ?>
                        <tr>
                            <td><?=$employee->id?></td>
                            <td><?=$employee->lastname?></td>
                            <td><?=$employee->firstname?></td>
                            <td><a href="{{ url('/companies/view/'.$employee->company_id) }}"><?=$employee->company?></a></td>
                            <td><?=(!empty($employee->phone) ? $employee->phone : '-')?></td>
                            <td><?=(!empty($employee->email) ? '<a href="mailto:'.$employee->email.'">'.$employee->email.'</a>' : '-')?></td>
                            <td><a href="{{ url('/employees/edit/'.$employee->id) }}">Edit</a></td>
                            <td><a href="{{ url('/employees/del/'.$employee->id) }}" onclick="return confirm('Delete this employee?');" >Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php echo $employees->render(); ?>
        <?php else: ?>
            <div style="margin-top:50px;">
                <i>Not employees</i>
            </div>
        <?php endif; ?>
    </div>

@endsection