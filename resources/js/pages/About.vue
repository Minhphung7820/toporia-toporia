<template>
  <div class="about-page">
    <div class="container">
      <h1 class="page-title">About Toporia</h1>
      <p class="page-description">
        Toporia is a professional PHP framework built on Clean Architecture principles.
        It provides a solid foundation for building scalable, maintainable applications.
      </p>

      <div class="info-grid">
        <div class="info-card">
          <h3>Clean Architecture</h3>
          <p>Strict separation between Domain, Application, Infrastructure, and Presentation layers.</p>
        </div>
        <div class="info-card">
          <h3>SOLID Principles</h3>
          <p>Every component follows industry-standard design principles for maintainable code.</p>
        </div>
        <div class="info-card">
          <h3>Developer Experience</h3>
          <p>Intuitive APIs and comprehensive documentation to boost productivity.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
};
</script>

<style scoped>
.about-page {
  padding: 60px 0;
  min-height: 100vh;
  background: #fafafa;
}

.container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 2rem;
}

.page-title {
  font-size: clamp(32px, 5vw, 48px);
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 16px;
  text-align: center;
}

.page-description {
  font-size: 18px;
  color: #666;
  max-width: 600px;
  margin: 0 auto 48px;
  text-align: center;
  line-height: 1.6;
}

.info-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.info-card {
  background: #fff;
  border: 1px solid #e5e5e5;
  border-radius: 12px;
  padding: 32px;
}

.info-card h3 {
  font-size: 20px;
  font-weight: 600;
  color: #1a1a1a;
  margin-bottom: 12px;
}

.info-card p {
  font-size: 14px;
  color: #666;
  line-height: 1.6;
}

@media (max-width: 768px) {
  .info-grid {
    grid-template-columns: 1fr;
  }

  .container {
    padding: 0 1.5rem;
  }
}
</style>
