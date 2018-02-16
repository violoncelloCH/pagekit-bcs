<template>
  <div class="uk-grid">

      <div class="uk-width-1-2">
        <div class="uk-form-row">
          <h2>{{'Hero Config' | trans}}</h2>
          <div class="uk-form-controls uk-form-controls-text">
            <p class="uk-form-controls-condensed">
                <label><input type="checkbox" v-model="node.theme.light"> {{ 'Invert colors' | trans }}</label>
            </p>
            <p class="uk-form-controls-condensed uk-form-width-large"><input-image :source.sync="node.theme.hero_image"></input-image></p>
            <p class="uk-form-help-block">{{ 'Select a background image for the hero position.' | trans }}</p>
          </div>
        </div>
      </div>

      <div class="uk-width-1-2">
        <div class="uk-form-row">
          <h2>{{'Hero Background Config' | trans}}</h2>
          <div class="uk-form-controls uk-form-controls-text">
            <p class="uk-form-controls-condensed">
                <label><input type="checkbox" v-model="node.theme.blend"> {{ 'Background Color is active' | trans }}</label>
            </p>
            <p class="uk-form-controls-condensed">
                <label>
                  <select class="uk-form-width-large" v-model="node.theme.color">
                    <option value="">None</option>
                    <option value="uk-background-primary">Primary</option>
                    <option value="uk-background-secondary">Secondary</option>
                    <option value="uk-background-muted">Muted</option>
                  </select>
                </label>
            </p>
          </div>
        </div>
      </div>

      <div class="uk-width-2-2">
        <div class="uk-form-row">
          <h2>{{'Hero Other Config' | trans}}</h2>
          <div class="uk-form-controls uk-form-controls-text">
            <p class="uk-form-controls-condensed">
                <label><input type="checkbox" v-model="node.theme.content"> {{ 'Content Hide' | trans }}</label>
            </p>
            <p class="uk-form-controls-condensed">
                <label><input type="checkbox" v-model="node.theme.footer"> {{ 'Footer Hide' | trans }}</label>
            </p>
            <p class="uk-form-controls-condensed">
                <label><input type="checkbox" v-model="node.theme.title"> {{ 'Title Hide' | trans }}</label>
            </p>
          </div>
        </div>
      </div>
  </div>
</template>

<script>

    module.exports = {

        section: {
            label: 'PASTheme Config',
            priority: 90
        },

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>
