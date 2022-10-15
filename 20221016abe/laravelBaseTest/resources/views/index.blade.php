<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css" />
</head>
<style>
  input,
    select {
      vertical-align: middle;
    }
    .flex {
      display: flex;
    }

    .between {
      justify-content: space-between;
    }
  .mb-15 {
      margin-bottom: 15px;
    }
  .mb-30 {
      margin-bottom: 30px;
    }
    .input-add {
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .button-add {
      text-align: left;
      border: 2px solid #dc70fa;
      font-size: 12px;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

  .title {
      font-weight: bold;
      font-size: 24px;
    }
    .input-add {
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }
    
    table {
      text-align: center;
      width: 100%
    }
    /*tr {
      height: 50px;
    }*/
    .input-update {
      width: 90%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    } 
  .container{
    background-color:#2d197c;
    height: 100vh;
    width: 100vw;
    position: relative;
  }
  .card{
    background-color: #fff;
    width: 50vw;
    padding: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
  }
  .button-update {
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }
     .button-update:hover {
      background-color: #fa9770;
      border-color: #fa9770;
      color: #fff;
    }

    .button-delete {
      text-align: left;
      border: 2px solid #71fadc;
      font-size: 12px;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

</style>
<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
        <form action="/add" method="post" class="flex between mb-30">
         @csrf
          <input type="text" class="input-add" name="todo_value">
          <input type="submit" value="追加" class="button-add">
        </form>
        <table> 
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach($todo_lists as $todo_list)
          <tr>
            
             <form method="post" class="flex between mb-30">
              @csrf
            <td>
              {{$todo_list->created_at}}
            </td>
            <td>
                  <input type="hidden"  name="id" value="{{$todo_list->id}}">
                  <input class="input-update" type="text" name ="todo_value" value="{{$todo_list->todo_value}}">
            </td>
            <td>
              <button type="submit" class="button-update" formaction="/update">更新</button>
            </td>
            <td>
              <button type="submit" class="button-delete" formaction="/delete">削除</button>
            </td>
            </form>
          <tr>   
          @endforeach
        </table> 
    </div>    
  </div>
</body>
</html>