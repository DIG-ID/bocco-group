<?php
/**
 * The template for displaying services archive pages
 */

get_header(); ?>

<?php do_action( 'before_main_content' ); ?>

<?php if ( have_posts() ) : ?>


<style>
  .wrap {
    position: relative;
    width: 100%;
    height: 420px;
    border-radius: 16px;
    overflow: hidden;
    background: #0a1a4a;
  }
  .canvas {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
  }
  .blob {
    position: absolute;
    border-radius: 50%;
  }
  /* lighten blend: shows the brighter of two colors — keeps #4DEBB3 very visible, doesn't blow out to white like screen */
  .b1 {
    width: 90%; height: 180%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #4DEBB3cc 30%, #0090DF 60%, transparent 78%);
    top: -55%; left: -20%;
    mix-blend-mode: lighten;
    opacity: 0.95;
    animation: m1 14s ease-in-out infinite;
  }
  .b2 {
    width: 75%; height: 150%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0090DF 45%, transparent 72%);
    top: 25%; left: 55%;
    mix-blend-mode: lighten;
    opacity: 0.9;
    animation: m2 17s ease-in-out infinite;
  }
  .b3 {
    width: 80%; height: 160%;
    background: radial-gradient(circle at 50% 50%, #0090DF 0%, #0040E5 50%, transparent 74%);
    top: -20%; left: 35%;
    mix-blend-mode: lighten;
    opacity: 0.9;
    animation: m3 11s ease-in-out infinite;
  }
  .b4 {
    width: 65%; height: 130%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0040E5 55%, transparent 75%);
    top: 35%; left: -10%;
    mix-blend-mode: lighten;
    opacity: 0.85;
    animation: m4 20s ease-in-out infinite;
  }
  .b5 {
    width: 70%; height: 140%;
    background: radial-gradient(circle at 50% 50%, #0040E5 0%, #4DEBB3 50%, transparent 72%);
    top: 40%; left: 42%;
    mix-blend-mode: lighten;
    opacity: 0.88;
    animation: m5 15s ease-in-out infinite;
  }
  .b6 {
    width: 55%; height: 110%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0090DF 55%, transparent 76%);
    top: -15%; left: 62%;
    mix-blend-mode: lighten;
    opacity: 0.8;
    animation: m6 18s ease-in-out infinite;
  }
  .b7 {
    width: 60%; height: 120%;
    background: radial-gradient(circle at 50% 50%, #0090DF 0%, #4DEBB3 50%, #0040E5 75%, transparent 85%);
    top: 50%; left: 15%;
    mix-blend-mode: lighten;
    opacity: 0.85;
    animation: m7 13s ease-in-out infinite;
  }

  @keyframes m1 {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(16%, 20%) scale(1.07); }
    66%      { transform: translate(6%, -10%) scale(0.93); }
  }
  @keyframes m2 {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(-18%, 12%) scale(0.94); }
    66%      { transform: translate(10%, 22%) scale(1.1); }
  }
  @keyframes m3 {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(20%, -16%) scale(1.06); }
    66%      { transform: translate(-6%, 12%) scale(0.91); }
  }
  @keyframes m4 {
    0%,100% { transform: translate(0,0) scale(1); }
    50%      { transform: translate(24%, -14%) scale(1.12); }
  }
  @keyframes m5 {
    0%,100% { transform: translate(0,0) scale(1); }
    40%      { transform: translate(-16%, -18%) scale(1.09); }
    80%      { transform: translate(10%, 8%) scale(0.88); }
  }
  @keyframes m6 {
    0%,100% { transform: translate(0,0) scale(1); }
    35%      { transform: translate(-22%, 14%) scale(1.1); }
    70%      { transform: translate(6%, 18%) scale(0.92); }
  }
  @keyframes m7 {
    0%,100% { transform: translate(0,0) scale(1); }
    45%      { transform: translate(18%, -20%) scale(1.13); }
    80%      { transform: translate(-8%, 10%) scale(0.9); }
  }
</style>

	<header class="page-header">
<div class="wrap">
  <div class="canvas">
    <div class="blob b1"></div>
    <div class="blob b2"></div>
    <div class="blob b3"></div>
    <div class="blob b4"></div>
    <div class="blob b5"></div>
    <div class="blob b6"></div>
    <div class="blob b7"></div>
  </div>
</div>
		<h1 class="page-title text-center"><?php esc_html_e( 'Presseartikel', 'bocco-group' ); ?></h1>	
	</header><!-- .page-header -->

  <?php endif; ?>

<?php do_action( 'after_main_content' ); ?>

<?php get_footer();