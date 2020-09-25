
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>{{ trans('site.Employees') }} (<?=$employees->total()?>)</h2>

                <div class="text-right">
                    <button onclick="location.href='<?=route('employee_add', app()->getLocale())?>'" class="btn btn-success" >{{ trans('site.Add_new_employee') }}</button>
                </div>

                @include('partials.flash')

                <?php if (isset($employees) && !empty($employees) && $employees->total()>0 ): ?>
                    <table id="id-companies" class="table table-striped" style="width:100%; margin: 20px 0;">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>{{ trans('site.Firstname') }}</th>
                                <th>{{ trans('site.Lastname') }}</th>
                                <th>{{ trans('site.Post') }}</th>
                                <th>{{ trans('site.Company') }}</th>
                                <th>{{ trans('site.Phone') }}</th>
                                <th>{{ trans('site.Email') }}</th>
                                <th colspan="2" class="text-center">{{ trans('site.Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($employees as $employee): ?>
                                <tr>
                                    <td><?=$employee->id?></td>
                                    <td><?=$employee->firstname?></td>
                                    <td><?=$employee->lastname?></td>
                                    <td><?=(!empty($employee->post) ? $employee->post : '-')?></td>
                                    <td><a href="{{ url('/'.app()->getLocale().'/admin/companies/view/'.$employee->company_id) }}"><?=$employee->company?></a></td>
                                    <td><?=(!empty($employee->phone) ? $employee->phone : '-')?></td>
                                    <td><?=(!empty($employee->email) ? '<a href="mailto:'.$employee->email.'">'.$employee->email.'</a>' : '-')?></td>
                                    <td class="text-center"><a href="{{ url('/'.app()->getLocale().'/admin/employees/edit/'.$employee->id) }}">{{ trans('site.Edit') }}</a></td>
                                    <td class="text-center"><a href="{{ url('/'.app()->getLocale().'/admin/employees/del/'.$employee->id) }}" onclick="return confirm('Delete this employee?');" >{{ trans('site.Delete') }}</a></td>
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
        </div>
    </div>

@endsection
