<?php include __DIR__.'/../inicio-html.php'; ?>
    <a href="/novo-curso" class="btn btn-outline-primary mb-2">Novo Curso</a>
    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $curso->getDescricao(); ?>

                <span>
                    <a href="/alterar-curso?id=<?= $curso->getId(); ?>" 
                    class="btn btn-outline-info btn-sm" style="color:black;">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <a href="/excluir-curso?id=<?= $curso->getId(); ?>" 
                    class="btn btn-outline-warning btn-sm" style="color:black;">
                        <i class="fa-solid fa-trash-can fa-lg"></i>
                    </a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php include __DIR__.'/../fim-html.php'; ?>