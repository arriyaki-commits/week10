@extends('layout')

@section('title')
    บทความทั้งหมด
@endsection

@section('content')
    <h2 class="text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">title</th>
                {{-- <th scope="col">content</th> --}}
                <th scope="col">status</th>
                <th scope="col">Edit</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    {{-- <td>{{ Str::limit($item->content, 20) }}</td> --}}
                    <td>
                        @if ($item->status)
                            <a href="{{ Route('change', $item->id) }}">
                                <spam class="btn btn-success">เผยแพร่</spam>
                            </a>
                        @else
                            <a href="{{ Route('change', $item->id) }}">
                                <spam class="btn btn-danger">ไม่เผยแพร่</spam>
                            </a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ Route('edit', $item->id) }}">
                            <spam class="btn btn-warning">แก้ไข</spam>
                        </a>
                    </td>
                    <td>
                        <a href="{{ Route('delete', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?')">ลบ</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
