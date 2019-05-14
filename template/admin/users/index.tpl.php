<h3 class="mb-5">Administração de usuários</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($data['users'] as $user): ?>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td class="text-right">
                <a href="/admin/users/<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Ver</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="/admin/users/create" class="btn btn-secondary">Novo</a>