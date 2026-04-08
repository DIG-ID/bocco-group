<?php
/**
 * The template for displaying services archive pages
 */

?>

<style>
  .page-title.animated-bg {
    position: absolute;
    z-index: 99;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .wrap {
    position: relative;
    width: 100%;
    height: 315px;
    overflow: hidden;
    background: #0090DF;
  }
  .canvas {
    position: absolute;
    inset: -80px;
    filter: blur(60px) saturate(1.3);
  }
  .blob {
    position: absolute;
    border-radius: 50%;
  }
  .b1 {
    width: 80%; height: 300%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0090DF 55%, transparent 75%);
    top: -120%; left: -15%;
    animation: m1 11s ease-in-out infinite;
  }
  .b2 {
    width: 75%; height: 280%;
    background: radial-gradient(circle at 50% 50%, #0040E5 0%, #0090DF 50%, transparent 75%);
    top: -80%; left: 25%;
    animation: m2 13s ease-in-out infinite;
  }
  .b3 {
    width: 70%; height: 260%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0040E5 55%, transparent 75%);
    top: -50%; left: 55%;
    animation: m3 9s ease-in-out infinite;
  }
  .b4 {
    width: 65%; height: 250%;
    background: radial-gradient(circle at 50% 50%, #0090DF 0%, #4DEBB3 50%, transparent 75%);
    top: 20%; left: -5%;
    animation: m4 15s ease-in-out infinite;
  }
  .b5 {
    width: 60%; height: 240%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0090DF 45%, #0040E5 70%, transparent 82%);
    top: 10%; left: 40%;
    animation: m5 11s ease-in-out infinite;
  }
  .b6 {
    width: 55%; height: 220%;
    background: radial-gradient(circle at 50% 50%, #0040E5 0%, #4DEBB3 60%, transparent 78%);
    top: -30%; left: 70%;
    animation: m6 12s ease-in-out infinite;
  }
  .b7 {
    width: 50%; height: 200%;
    background: radial-gradient(circle at 50% 50%, #4DEBB3 0%, #0090DF 55%, transparent 76%);
    top: 30%; left: 15%;
    animation: m7 10s ease-in-out infinite;
  }

  @keyframes m1 {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(12%, 10%) scale(1.06); }
    66%      { transform: translate(5%, -8%) scale(0.95); }
  }
  @keyframes m2 {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(-10%, 8%) scale(0.96); }
    66%      { transform: translate(8%, 14%) scale(1.08); }
  }
  @keyframes m3 {
    0%,100% { transform: translate(0,0) scale(1); }
    33%      { transform: translate(14%, -10%) scale(1.05); }
    66%      { transform: translate(-4%, 8%) scale(0.93); }
  }
  @keyframes m4 {
    0%,100% { transform: translate(0,0) scale(1); }
    50%      { transform: translate(16%, -12%) scale(1.1); }
  }
  @keyframes m5 {
    0%,100% { transform: translate(0,0) scale(1); }
    40%      { transform: translate(-12%, -14%) scale(1.07); }
    80%      { transform: translate(8%, 6%) scale(0.9); }
  }
  @keyframes m6 {
    0%,100% { transform: translate(0,0) scale(1); }
    35%      { transform: translate(-16%, 10%) scale(1.08); }
    70%      { transform: translate(4%, 14%) scale(0.94); }
  }
  @keyframes m7 {
    0%,100% { transform: translate(0,0) scale(1); }
    45%      { transform: translate(14%, -16%) scale(1.1); }
    80%      { transform: translate(-6%, 8%) scale(0.92); }
  }
</style>

	<header class="page-header p-0 position-relative">
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
		<h1 class="page-title animated-bg text-center"><?php esc_html_e( 'Presseartikel', 'bocco-group' ); ?></h1>	
	</header><!-- .page-header -->

