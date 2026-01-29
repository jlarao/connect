<?php

class UserController {
    public function index() {
        return Response::json([
            ['id' => 1, 'name' => 'Juan'],
            ['id' => 2, 'name' => 'Ana']
        ]);
    }

    public function show($id) {
        return Response::json(['id' => $id, 'name' => 'Usuario #' . $id]);
    }
}
