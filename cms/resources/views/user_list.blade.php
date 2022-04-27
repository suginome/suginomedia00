@extends('layouts.app')
@section('content')
	<!-- Book: 既に登録されてる本のリスト -->
    @if (count($books) > 0)
        <div class="card-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                    <th>本一覧</th>
                    <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $book->user_name }}</div>
                            </td>
                            
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $book->user_email }}</div>
                            </td>
                            
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $book->user_sakubun }}</div>
                            </td>
                            
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $book->user_price }}</div>
                            </td>
                            
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $book->id }}</div>
                            </td>
                            
                            
                            
                            
                            
                            
                            <!-- 本: 削除ボタン -->
                            <td>
                                <form action="{{ url('book/'.$book->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        削除
                                    </button>
                                </form>
                            </td>
                            <!-- 本: 更新ボタン -->
                            <td>
                                <a href="{{ url('booksedit/'.$book->id) }}">
                                    <button type="submit" class="btn btn-primary">更新</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
