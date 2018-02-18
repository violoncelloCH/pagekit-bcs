<template>
  <div class="uk-form-row">
    <span class="uk-form-label">Widget Config</span>
    <div class="uk-form-controls uk-form-controls-text">
      <p class="uk-form-controls-condensed">
        <label>
          <input type="checkbox" v-model="widget.theme.title">
          Widget Title Hide
        </label>
      </p>
      <p class="uk-form-controls-condensed">
        <label>
          <input type="checkbox" value="" v-model="widget.theme.padding">
          No Card Padding
        </label>
      </p>
      <p class="uk-form-controls-condensed">
        <label>Widget Style</label>
        <select class="" v-model="widget.theme.panel">
          <option value="">None Style</option>
          <option value="uk-card-default">Default</option>
          <option value="uk-card-primary">Primary</option>
          <option value="uk-card-secondary">Secondary</option>
        </select>
      </p>
    </div>
  </div>
</template>

<script>
    module.exports = {
        section: {
            label: 'Theme',
            priority: 90
        },
        props: ['widget', 'config']
    };
    window.Widgets.components['theme'] = module.exports;
</script>
