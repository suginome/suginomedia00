{"filter":false,"title":"user_list.blade.php","tooltip":"/cms/resources/views/user_list.blade.php","undoManager":{"mark":39,"position":39,"stack":[[{"start":{"row":0,"column":0},"end":{"row":86,"column":3},"action":"insert","lines":["```php","@extends('layouts.app')","@section('content')","    <!-- Bootstrapの定形コード… -->","    <div class=\"card-body\">","        <div class=\"card-title\">","            ブックマーク","        </div>","        ","        <!-- ↓バリデーションエラーの表示に使用-->","        @include('common.errors')","        <!-- ↑バリデーションエラーの表示に使用-->","","        <!-- 本登録フォーム -->","        <form action=\"{{ url('books') }}\" method=\"POST\" class=\"form-horizontal\">","            @csrf","            <!-- 本のタイトル -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"item_name\" class=\"col-sm-3 control-label\">タイトル</label>","                <input type=\"text\" name=\"item_name\" class=\"form-control\" id=\"item_name\" value=\"{{ old('item_name') }}\">","            </div>","            <!-- 冊数 -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"item_number\" class=\"col-sm-3 control-label\">冊数</label>","                <input type=\"text\" name=\"item_number\" class=\"form-control\" id=\"item_number\" value=\"{{ old('item_number') }}\">","            </div>","            <!-- 金額 -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"item_amount\" class=\"col-sm-3 control-label\">金額</label>","                <input type=\"text\" name=\"item_amount\" class=\"form-control\" id=\"item_amount\" value=\"{{ old('item_amount') }}\">","            </div>","            <!-- 公開日 -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"published\" class=\"col-sm-3 control-label\">公開日</label>","                <input type=\"date\" name=\"published\" class=\"form-control\" id=\"published\" value=\"{{ old('published') }}\">","            </div>","            <!-- 本 登録ボタン -->","            <div class=\"form-group p-2\">","                <div class=\"col-sm-offset-3 col-sm-6\">","                    <button type=\"submit\" class=\"btn btn-primary\">","                        Save","                    </button>","                </div>","            </div>","        </form>","    </div>","\t<!-- Book: 既に登録されてる本のリスト -->","    @if (count($books) > 0)","        <div class=\"card-body\">","            <table class=\"table table-striped task-table\">","                <!-- テーブルヘッダ -->","                <thead>","                    <th>本一覧</th>","                    <th>&nbsp;</th>","                </thead>","                <!-- テーブル本体 -->","                <tbody>","                    @foreach ($books as $book)","                        <tr>","                            <!-- 本タイトル -->","                            <td class=\"table-text\">","                                <div>{{ $book->item_name }}</div>","                            </td>","                            <!-- 本: 削除ボタン -->","                            <td>","                                <form action=\"{{ url('book/'.$book->id) }}\" method=\"POST\">","                                    @csrf","                                    @method('delete')","                                    <button type=\"submit\" class=\"btn btn-danger\">","                                        削除","                                    </button>","                                </form>","                            </td>","                            <!-- 本: 更新ボタン -->","                            <td>","                                <a href=\"{{ url('booksedit/'.$book->id) }}\">","                                    <button type=\"submit\" class=\"btn btn-primary\">更新</button>","                                </a>","                            </td>","                        </tr>","                    @endforeach","                </tbody>","            </table>","        </div>","    @endif","@endsection","```"],"id":1}],[{"start":{"row":3,"column":0},"end":{"row":46,"column":0},"action":"remove","lines":["    <!-- Bootstrapの定形コード… -->","    <div class=\"card-body\">","        <div class=\"card-title\">","            ブックマーク","        </div>","        ","        <!-- ↓バリデーションエラーの表示に使用-->","        @include('common.errors')","        <!-- ↑バリデーションエラーの表示に使用-->","","        <!-- 本登録フォーム -->","        <form action=\"{{ url('books') }}\" method=\"POST\" class=\"form-horizontal\">","            @csrf","            <!-- 本のタイトル -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"item_name\" class=\"col-sm-3 control-label\">タイトル</label>","                <input type=\"text\" name=\"item_name\" class=\"form-control\" id=\"item_name\" value=\"{{ old('item_name') }}\">","            </div>","            <!-- 冊数 -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"item_number\" class=\"col-sm-3 control-label\">冊数</label>","                <input type=\"text\" name=\"item_number\" class=\"form-control\" id=\"item_number\" value=\"{{ old('item_number') }}\">","            </div>","            <!-- 金額 -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"item_amount\" class=\"col-sm-3 control-label\">金額</label>","                <input type=\"text\" name=\"item_amount\" class=\"form-control\" id=\"item_amount\" value=\"{{ old('item_amount') }}\">","            </div>","            <!-- 公開日 -->","            <div class=\"form-group col-md-6 p-2\">","                <label for=\"published\" class=\"col-sm-3 control-label\">公開日</label>","                <input type=\"date\" name=\"published\" class=\"form-control\" id=\"published\" value=\"{{ old('published') }}\">","            </div>","            <!-- 本 登録ボタン -->","            <div class=\"form-group p-2\">","                <div class=\"col-sm-offset-3 col-sm-6\">","                    <button type=\"submit\" class=\"btn btn-primary\">","                        Save","                    </button>","                </div>","            </div>","        </form>","    </div>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":6},"action":"remove","lines":["```php"],"id":3}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":20,"column":28},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":21,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":21,"column":28},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":22,"column":28},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":23,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":20,"column":28},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":21,"column":0},"end":{"row":21,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":21,"column":28},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":22,"column":28},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":23,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":20,"column":28},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":21,"column":0},"end":{"row":21,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":21,"column":28},"end":{"row":24,"column":33},"action":"insert","lines":["<!-- 本タイトル -->","                            <td class=\"table-text\">","                                <div>{{ $book->item_name }}</div>","                            </td>"],"id":7}],[{"start":{"row":24,"column":33},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":25,"column":0},"end":{"row":25,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":25,"column":28},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":26,"column":28},"end":{"row":29,"column":33},"action":"insert","lines":["<!-- 本タイトル -->","                            <td class=\"table-text\">","                                <div>{{ $book->item_name }}</div>","                            </td>"],"id":9}],[{"start":{"row":29,"column":33},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":30,"column":0},"end":{"row":30,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":30,"column":28},"end":{"row":31,"column":0},"action":"insert","lines":["",""]},{"start":{"row":31,"column":0},"end":{"row":31,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":31,"column":28},"end":{"row":34,"column":33},"action":"insert","lines":["<!-- 本タイトル -->","                            <td class=\"table-text\">","                                <div>{{ $book->item_name }}</div>","                            </td>"],"id":11}],[{"start":{"row":34,"column":33},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":35,"column":0},"end":{"row":35,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":35,"column":28},"end":{"row":36,"column":0},"action":"insert","lines":["",""]},{"start":{"row":36,"column":0},"end":{"row":36,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":36,"column":28},"end":{"row":39,"column":33},"action":"insert","lines":["<!-- 本タイトル -->","                            <td class=\"table-text\">","                                <div>{{ $book->item_name }}</div>","                            </td>"],"id":13}],[{"start":{"row":18,"column":55},"end":{"row":18,"column":56},"action":"remove","lines":["e"],"id":14},{"start":{"row":18,"column":54},"end":{"row":18,"column":55},"action":"remove","lines":["m"]},{"start":{"row":18,"column":53},"end":{"row":18,"column":54},"action":"remove","lines":["a"]},{"start":{"row":18,"column":52},"end":{"row":18,"column":53},"action":"remove","lines":["n"]},{"start":{"row":18,"column":51},"end":{"row":18,"column":52},"action":"remove","lines":["_"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"remove","lines":["m"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"remove","lines":["e"]},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["t"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"insert","lines":["i"],"id":15},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"insert","lines":["u"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"remove","lines":["s"],"id":16},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"remove","lines":["u"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"insert","lines":["u"],"id":17},{"start":{"row":18,"column":48},"end":{"row":18,"column":49},"action":"insert","lines":["s"]},{"start":{"row":18,"column":49},"end":{"row":18,"column":50},"action":"insert","lines":["e"]},{"start":{"row":18,"column":50},"end":{"row":18,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":18,"column":47},"end":{"row":18,"column":51},"action":"remove","lines":["user"],"id":18},{"start":{"row":18,"column":47},"end":{"row":18,"column":56},"action":"insert","lines":["user_name"]}],[{"start":{"row":23,"column":55},"end":{"row":23,"column":56},"action":"remove","lines":["e"],"id":19},{"start":{"row":23,"column":54},"end":{"row":23,"column":55},"action":"remove","lines":["m"]},{"start":{"row":23,"column":53},"end":{"row":23,"column":54},"action":"remove","lines":["a"]},{"start":{"row":23,"column":52},"end":{"row":23,"column":53},"action":"remove","lines":["n"]},{"start":{"row":23,"column":51},"end":{"row":23,"column":52},"action":"remove","lines":["_"]},{"start":{"row":23,"column":50},"end":{"row":23,"column":51},"action":"remove","lines":["m"]},{"start":{"row":23,"column":49},"end":{"row":23,"column":50},"action":"remove","lines":["e"]},{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"remove","lines":["t"]},{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"insert","lines":["u"],"id":20},{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"insert","lines":["s"]},{"start":{"row":23,"column":49},"end":{"row":23,"column":50},"action":"insert","lines":["e"]},{"start":{"row":23,"column":50},"end":{"row":23,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":23,"column":47},"end":{"row":23,"column":51},"action":"remove","lines":["user"],"id":21},{"start":{"row":23,"column":47},"end":{"row":23,"column":59},"action":"insert","lines":["user_sakubun"]}],[{"start":{"row":23,"column":58},"end":{"row":23,"column":59},"action":"remove","lines":["n"],"id":22},{"start":{"row":23,"column":57},"end":{"row":23,"column":58},"action":"remove","lines":["u"]},{"start":{"row":23,"column":56},"end":{"row":23,"column":57},"action":"remove","lines":["b"]},{"start":{"row":23,"column":55},"end":{"row":23,"column":56},"action":"remove","lines":["u"]},{"start":{"row":23,"column":54},"end":{"row":23,"column":55},"action":"remove","lines":["k"]},{"start":{"row":23,"column":53},"end":{"row":23,"column":54},"action":"remove","lines":["a"]},{"start":{"row":23,"column":52},"end":{"row":23,"column":53},"action":"remove","lines":["s"]}],[{"start":{"row":23,"column":52},"end":{"row":23,"column":53},"action":"insert","lines":["e"],"id":23}],[{"start":{"row":23,"column":47},"end":{"row":23,"column":53},"action":"remove","lines":["user_e"],"id":24},{"start":{"row":23,"column":47},"end":{"row":23,"column":57},"action":"insert","lines":["user_email"]}],[{"start":{"row":28,"column":55},"end":{"row":28,"column":56},"action":"remove","lines":["e"],"id":25},{"start":{"row":28,"column":54},"end":{"row":28,"column":55},"action":"remove","lines":["m"]},{"start":{"row":28,"column":53},"end":{"row":28,"column":54},"action":"remove","lines":["a"]},{"start":{"row":28,"column":52},"end":{"row":28,"column":53},"action":"remove","lines":["n"]}],[{"start":{"row":28,"column":52},"end":{"row":28,"column":53},"action":"insert","lines":["s"],"id":26},{"start":{"row":28,"column":53},"end":{"row":28,"column":54},"action":"insert","lines":["a"]},{"start":{"row":28,"column":54},"end":{"row":28,"column":55},"action":"insert","lines":["k"]},{"start":{"row":28,"column":55},"end":{"row":28,"column":56},"action":"insert","lines":["u"]}],[{"start":{"row":28,"column":55},"end":{"row":28,"column":56},"action":"remove","lines":["u"],"id":27},{"start":{"row":28,"column":54},"end":{"row":28,"column":55},"action":"remove","lines":["k"]},{"start":{"row":28,"column":53},"end":{"row":28,"column":54},"action":"remove","lines":["a"]},{"start":{"row":28,"column":52},"end":{"row":28,"column":53},"action":"remove","lines":["s"]},{"start":{"row":28,"column":51},"end":{"row":28,"column":52},"action":"remove","lines":["_"]},{"start":{"row":28,"column":50},"end":{"row":28,"column":51},"action":"remove","lines":["m"]},{"start":{"row":28,"column":49},"end":{"row":28,"column":50},"action":"remove","lines":["e"]},{"start":{"row":28,"column":48},"end":{"row":28,"column":49},"action":"remove","lines":["t"]},{"start":{"row":28,"column":47},"end":{"row":28,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":28,"column":47},"end":{"row":28,"column":48},"action":"insert","lines":["u"],"id":28},{"start":{"row":28,"column":48},"end":{"row":28,"column":49},"action":"insert","lines":["s"]},{"start":{"row":28,"column":49},"end":{"row":28,"column":50},"action":"insert","lines":["e"]},{"start":{"row":28,"column":50},"end":{"row":28,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":28,"column":47},"end":{"row":28,"column":51},"action":"remove","lines":["user"],"id":29},{"start":{"row":28,"column":47},"end":{"row":28,"column":59},"action":"insert","lines":["user_sakubun"]}],[{"start":{"row":33,"column":55},"end":{"row":33,"column":56},"action":"remove","lines":["e"],"id":30},{"start":{"row":33,"column":54},"end":{"row":33,"column":55},"action":"remove","lines":["m"]},{"start":{"row":33,"column":53},"end":{"row":33,"column":54},"action":"remove","lines":["a"]},{"start":{"row":33,"column":52},"end":{"row":33,"column":53},"action":"remove","lines":["n"]},{"start":{"row":33,"column":51},"end":{"row":33,"column":52},"action":"remove","lines":["_"]},{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"remove","lines":["m"]},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"remove","lines":["e"]},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"remove","lines":["t"]},{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":33,"column":47},"end":{"row":33,"column":48},"action":"insert","lines":["u"],"id":31},{"start":{"row":33,"column":48},"end":{"row":33,"column":49},"action":"insert","lines":["s"]},{"start":{"row":33,"column":49},"end":{"row":33,"column":50},"action":"insert","lines":["e"]},{"start":{"row":33,"column":50},"end":{"row":33,"column":51},"action":"insert","lines":["r"]}],[{"start":{"row":33,"column":47},"end":{"row":33,"column":51},"action":"remove","lines":["user"],"id":32},{"start":{"row":33,"column":47},"end":{"row":33,"column":57},"action":"insert","lines":["user_price"]}],[{"start":{"row":38,"column":55},"end":{"row":38,"column":56},"action":"remove","lines":["e"],"id":33},{"start":{"row":38,"column":54},"end":{"row":38,"column":55},"action":"remove","lines":["m"]},{"start":{"row":38,"column":53},"end":{"row":38,"column":54},"action":"remove","lines":["a"]},{"start":{"row":38,"column":52},"end":{"row":38,"column":53},"action":"remove","lines":["n"]},{"start":{"row":38,"column":51},"end":{"row":38,"column":52},"action":"remove","lines":["_"]},{"start":{"row":38,"column":50},"end":{"row":38,"column":51},"action":"remove","lines":["m"]},{"start":{"row":38,"column":49},"end":{"row":38,"column":50},"action":"remove","lines":["e"]},{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"remove","lines":["t"]},{"start":{"row":38,"column":47},"end":{"row":38,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"insert","lines":["i"],"id":34}],[{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"remove","lines":["i"],"id":35},{"start":{"row":38,"column":48},"end":{"row":38,"column":50},"action":"insert","lines":["id"]}],[{"start":{"row":38,"column":49},"end":{"row":38,"column":50},"action":"remove","lines":["d"],"id":36},{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"remove","lines":["i"]},{"start":{"row":38,"column":47},"end":{"row":38,"column":48},"action":"remove","lines":[" "]}],[{"start":{"row":38,"column":47},"end":{"row":38,"column":48},"action":"insert","lines":["i"],"id":37},{"start":{"row":38,"column":48},"end":{"row":38,"column":49},"action":"insert","lines":["d"]}],[{"start":{"row":38,"column":49},"end":{"row":38,"column":50},"action":"insert","lines":[" "],"id":38}],[{"start":{"row":69,"column":2},"end":{"row":69,"column":3},"action":"remove","lines":["`"],"id":39},{"start":{"row":69,"column":1},"end":{"row":69,"column":2},"action":"remove","lines":["`"]},{"start":{"row":69,"column":0},"end":{"row":69,"column":1},"action":"remove","lines":["`"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":40}]]},"ace":{"folds":[],"scrolltop":192,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":67,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1650809308339,"hash":"9464ac5e2eff041fc871c8c0c1b8ab106b0a4503"}