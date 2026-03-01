<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<header>
  <?php if (is_front_page()): ?>
    <section class="hero">
      <h1>Welcome to Area 1...</h1>
    </section>
  <?php endif; ?>
</header>

<body>
  <main>
    <!-- Sidebar -->
    <?php if (is_single()): ?>
      <aside class="sidebar">
        <p>This is a blog sidebar.</p>
      </aside>
    <?php endif; ?>
    