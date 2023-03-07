@foreach($datas as $key=> $data)
<tr>
    <td>#{{ $key+1 }}</td>
    <td>
        {{ $data->category }}
    </td>
    <td>
        {{ $data->title }}
    </td>
    <td>
        {{ Str::limit($data->sub_title,10) }}
    </td>
    <td>
        {!! Str::limit(optional($data)->description,150) !!}
    </td>
    <td>
        {{ $data->price }} $ {{ $data->time }}
    </td>
    <td>
        @if($data->status == 1)
        <a class="btn btn-success btn-sm">Active</a>
        @else
        <a class="btn btn-primary btn-sm">Inactive</a>
        @endif
    </td>
   
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm "
                href="{{ route('back.course.edit',$data->id) }}">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('back.course.destroy',$data->id) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach