<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todolist</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <main class="todolist container">
        <h1 class="todolist title">Todolist do Rychard</h1>
        <div class="todolist content">
            <div class="todolist column">
                <div class="todolist column_header">
                    <div class="todolist column_title">A fazer</div>
                    <div class="todolist column_amount">1</div>
                </div>
                <div class="todolist column_content">
                    <div class="todolist column_item">
                        <div class="todolist column_item_title">teste</div>
                        <div class="todolist column_item_operations">
                            <button class="todolist btn del_item">Excluir</button>
                            <button class="todolist btn edit_item">Editar</button>
                        </div>
                    </div>
                </div>
                <button class="todolist btn add_item">Adicionar nota</button>
            </div>
            <div class="todolist column">
                <div class="todolist column_header">
                    <div class="todolist column_title">Em progesso</div>
                    <div class="todolist column_amount">1</div>
                </div>
                <div class="todolist column_content">
                    <div class="todolist column_item">
                        <div class="todolist column_item_title">testando</div>
                        <div class="todolist column_item_operations">
                            <button class="todolist btn del_item">Excluir</button>
                            <button class="todolist btn edit_item">Editar</button>
                        </div>
                    </div>
                </div>''
                <button class="todolist btn add_item">Adicionar nota</button>
            </div>
            <div class="todolist column">
                <div class="todolist column_header">
                    <div class="todolist column_title">Concluido</div>
                    <div class="todolist column_amount">1</div>
                </div>
                <div class="todolist column_content">
                    <div class="todolist column_item">
                        <div class="todolist column_item_title">testado</div>
                        <div class="todolist column_item_operations">
                            <button class="todolist btn del_item">Excluir</button>
                            <button class="todolist btn edit_item">Editar</button>
                        </div>
                    </div>
                </div>
                <button class="todolist btn add_item">Adicionar nota</button>
            </div>
        </div>
    </main>
</body>

</html>