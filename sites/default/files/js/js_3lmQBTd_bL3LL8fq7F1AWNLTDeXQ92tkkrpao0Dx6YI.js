/**
 * @file
 * JavaScript behaviors for Algolia places location integration.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  // @see https://github.com/algolia/places
  // @see https://community.algolia.com/places/documentation.html#options
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.locationPlaces = Drupal.webform.locationPlaces || {};
  Drupal.webform.locationPlaces.options = Drupal.webform.locationPlaces.options || {};

  var mapping = {
    lat: 'lat',
    lng: 'lng',
    name: 'name',
    postcode: 'postcode',
    locality: 'locality',
    city: 'city',
    administrative: 'administrative',
    country: 'country',
    countryCode: 'country_code',
    county: 'county',
    suburb: 'suburb'
  };

  /**
   * Initialize location places.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformLocationPlaces = {
    attach: function (context) {
      if (!window.places) {
        return;
      }

      $(context).find('.js-webform-type-webform-location-places').once('webform-location-places').each(function () {
        var $element = $(this);
        var $input = $element.find('.webform-location-places');

        // Prevent the 'Enter' key from submitting the form.
        $input.keydown(function (event) {
          if (event.keyCode === 13) {
            event.preventDefault();
          }
        });

        var options = $.extend({
          type: 'address',
          useDeviceLocation: true,
          container: $input.get(0)
        }, Drupal.webform.locationPlaces.options);

        // Add application id and API key.
        if (drupalSettings.webform.location.places.app_id && drupalSettings.webform.location.places.api_key) {
          options.appId = drupalSettings.webform.location.places.app_id;
          options.apiKey = drupalSettings.webform.location.places.api_key;
        }

        var placesAutocomplete = window.places(options);

        // Disable autocomplete.
        // @see https://gist.github.com/niksumeiko/360164708c3b326bd1c8
        var isChrome = /Chrome/.test(window.navigator.userAgent) && /Google Inc/.test(window.navigator.vendor);
        $input.attr('autocomplete', (isChrome) ? 'off' : 'false');

        // Sync values on change and clear events.
        placesAutocomplete.on('change', function (e) {
          $.each(mapping, function (source, destination) {
            var value = (source === 'lat' || source === 'lng' ? e.suggestion.latlng[source] : e.suggestion[source]) || '';
            setValue(destination, value);
          });
        });
        placesAutocomplete.on('clear', function (e) {
          $.each(mapping, function (source, destination) {
            setValue(destination, '');
          });
        });

        /**
         * Set attribute value.
         *
         * @param {string} name
         *   The attribute name
         * @param {string} value
         *   The attribute value
         */
        function setValue(name, value) {
          var inputSelector = ':input[data-webform-location-places-attribute="' + name + '"]';
          $element.find(inputSelector).val(value);
        }
      });
    }
  };

})(jQuery, Drupal, drupalSettings);

;
/**
 * @file
 * JavaScript behaviors for multiple element.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Move show weight to after the table.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformMultipleTableDrag = {
    attach: function (context, settings) {
      for (var base in settings.tableDrag) {
        if (settings.tableDrag.hasOwnProperty(base)) {
          $(context).find('.js-form-type-webform-multiple #' + base).once('webform-multiple-table-drag').each(function () {
            var $tableDrag = $(this);
            var $toggleWeight = $tableDrag.prev().prev('.tabledrag-toggle-weight-wrapper');
            if ($toggleWeight.length) {
              $toggleWeight.addClass('webform-multiple-tabledrag-toggle-weight');
              $tableDrag.after($toggleWeight);
            }
          });
        }
      }
    }
  };

  /**
   * Submit multiple add number input value when enter is pressed.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformMultipleAdd = {
    attach: function (context, settings) {
      $(context).find('.js-webform-multiple-add').once('webform-multiple-add').each(function () {
        var $submit = $(this).find('input[type="submit"], button');
        var $number = $(this).find('input[type="number"]');
        $number.keyup(function (event) {
          if (event.which === 13) {
            // Note: Mousedown is the default trigger for Ajax events.
            // @see Drupal.Ajax.
            $submit.mousedown();
          }
        });
      });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for Text format integration.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Enhance text format element.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformTextFormat = {
    attach: function (context) {
      $(context).find('.js-text-format-wrapper textarea').once('webform-text-format').each(function () {
        if (!window.CKEDITOR) {
          return;
        }

        var $textarea = $(this);
        // Update the CKEDITOR when the textarea's value has changed.
        // @see webform.states.js
        $textarea.on('change', function () {
          if (CKEDITOR.instances[$textarea.attr('id')]) {
            var editor = CKEDITOR.instances[$textarea.attr('id')];
            editor.setData($textarea.val());
          }
        });

        // Set CKEDITOR to be readonly when the textarea is disabled.
        // @see webform.states.js
        $textarea.on('webform:disabled', function () {
          if (CKEDITOR.instances[$textarea.attr('id')]) {
            var editor = CKEDITOR.instances[$textarea.attr('id')];
            editor.setReadOnly($textarea.is(':disabled'));
          }
        });

      });
    }
  };

})(jQuery, Drupal);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.filterGuidelines = {
    attach: function attach(context) {
      function updateFilterGuidelines(event) {
        var $this = $(event.target);
        var value = $this.val();
        $this.closest('.filter-wrapper').find('.filter-guidelines-item').hide().filter('.filter-guidelines-' + value).show();
      }

      $(context).find('.filter-guidelines').once('filter-guidelines').find(':header').hide().closest('.filter-wrapper').find('select.filter-list').on('change.filterGuidelines', updateFilterGuidelines).trigger('change.filterGuidelines');
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  function findFieldForFormatSelector($formatSelector) {
    var fieldId = $formatSelector.attr('data-editor-for');

    return $('#' + fieldId).get(0);
  }

  function filterXssWhenSwitching(field, format, originalFormatID, callback) {
    if (format.editor.isXssSafe) {
      callback(field, format);
    } else {
        $.ajax({
          url: Drupal.url('editor/filter_xss/' + format.format),
          type: 'POST',
          data: {
            value: field.value,
            original_format_id: originalFormatID
          },
          dataType: 'json',
          success: function success(xssFilteredValue) {
            if (xssFilteredValue !== false) {
              field.value = xssFilteredValue;
            }
            callback(field, format);
          }
        });
      }
  }

  function changeTextEditor(field, newFormatID) {
    var previousFormatID = field.getAttribute('data-editor-active-text-format');

    if (drupalSettings.editor.formats[previousFormatID]) {
      Drupal.editorDetach(field, drupalSettings.editor.formats[previousFormatID]);
    } else {
        $(field).off('.editor');
      }

    if (drupalSettings.editor.formats[newFormatID]) {
      var format = drupalSettings.editor.formats[newFormatID];
      filterXssWhenSwitching(field, format, previousFormatID, Drupal.editorAttach);
    }

    field.setAttribute('data-editor-active-text-format', newFormatID);
  }

  function onTextFormatChange(event) {
    var $select = $(event.target);
    var field = event.data.field;
    var activeFormatID = field.getAttribute('data-editor-active-text-format');
    var newFormatID = $select.val();

    if (newFormatID === activeFormatID) {
      return;
    }

    var supportContentFiltering = drupalSettings.editor.formats[newFormatID] && drupalSettings.editor.formats[newFormatID].editorSupportsContentFiltering;

    var hasContent = field.value !== '';
    if (hasContent && supportContentFiltering) {
      var message = Drupal.t('Changing the text format to %text_format will permanently remove content that is not allowed in that text format.<br><br>Save your changes before switching the text format to avoid losing data.', {
        '%text_format': $select.find('option:selected').text()
      });
      var confirmationDialog = Drupal.dialog('<div>' + message + '</div>', {
        title: Drupal.t('Change text format?'),
        dialogClass: 'editor-change-text-format-modal',
        resizable: false,
        buttons: [{
          text: Drupal.t('Continue'),
          class: 'button button--primary',
          click: function click() {
            changeTextEditor(field, newFormatID);
            confirmationDialog.close();
          }
        }, {
          text: Drupal.t('Cancel'),
          class: 'button',
          click: function click() {
            $select.val(activeFormatID);
            confirmationDialog.close();
          }
        }],

        closeOnEscape: false,
        create: function create() {
          $(this).parent().find('.ui-dialog-titlebar-close').remove();
        },

        beforeClose: false,
        close: function close(event) {
          $(event.target).remove();
        }
      });

      confirmationDialog.showModal();
    } else {
      changeTextEditor(field, newFormatID);
    }
  }

  Drupal.editors = {};

  Drupal.behaviors.editor = {
    attach: function attach(context, settings) {
      if (!settings.editor) {
        return;
      }

      $(context).find('[data-editor-for]').once('editor').each(function () {
        var $this = $(this);
        var field = findFieldForFormatSelector($this);

        if (!field) {
          return;
        }

        var activeFormatID = $this.val();
        field.setAttribute('data-editor-active-text-format', activeFormatID);

        if (settings.editor.formats[activeFormatID]) {
          Drupal.editorAttach(field, settings.editor.formats[activeFormatID]);
        }

        $(field).on('change.editor keypress.editor', function () {
          field.setAttribute('data-editor-value-is-changed', 'true');

          $(field).off('.editor');
        });

        if ($this.is('select')) {
          $this.on('change.editorAttach', { field: field }, onTextFormatChange);
        }

        $this.parents('form').on('submit', function (event) {
          if (event.isDefaultPrevented()) {
            return;
          }

          if (settings.editor.formats[activeFormatID]) {
            Drupal.editorDetach(field, settings.editor.formats[activeFormatID], 'serialize');
          }
        });
      });
    },
    detach: function detach(context, settings, trigger) {
      var editors = void 0;

      if (trigger === 'serialize') {
        editors = $(context).find('[data-editor-for]').findOnce('editor');
      } else {
        editors = $(context).find('[data-editor-for]').removeOnce('editor');
      }

      editors.each(function () {
        var $this = $(this);
        var activeFormatID = $this.val();
        var field = findFieldForFormatSelector($this);
        if (field && activeFormatID in settings.editor.formats) {
          Drupal.editorDetach(field, settings.editor.formats[activeFormatID], trigger);
        }
      });
    }
  };

  Drupal.editorAttach = function (field, format) {
    if (format.editor) {
      Drupal.editors[format.editor].attach(field, format);

      Drupal.editors[format.editor].onChange(field, function () {
        $(field).trigger('formUpdated');

        field.setAttribute('data-editor-value-is-changed', 'true');
      });
    }
  };

  Drupal.editorDetach = function (field, format, trigger) {
    if (format.editor) {
      Drupal.editors[format.editor].detach(field, format, trigger);

      if (field.getAttribute('data-editor-value-is-changed') === 'false') {
        field.value = field.getAttribute('data-editor-value-original');
      }
    }
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal, debounce, CKEDITOR, $, displace, AjaxCommands) {
  Drupal.editors.ckeditor = {
    attach: function attach(element, format) {
      this._loadExternalPlugins(format);

      format.editorSettings.drupal = {
        format: format.format
      };

      var label = $('label[for=' + element.getAttribute('id') + ']').html();
      format.editorSettings.title = Drupal.t('Rich Text Editor, !label field', {
        '!label': label
      });

      return !!CKEDITOR.replace(element, format.editorSettings);
    },
    detach: function detach(element, format, trigger) {
      var editor = CKEDITOR.dom.element.get(element).getEditor();
      if (editor) {
        if (trigger === 'serialize') {
          editor.updateElement();
        } else {
          editor.destroy();
          element.removeAttribute('contentEditable');
        }
      }
      return !!editor;
    },
    onChange: function onChange(element, callback) {
      var editor = CKEDITOR.dom.element.get(element).getEditor();
      if (editor) {
        editor.on('change', debounce(function () {
          callback(editor.getData());
        }, 400));

        editor.on('mode', function () {
          var editable = editor.editable();
          if (!editable.isInline()) {
            editor.on('autoGrow', function (evt) {
              var doc = evt.editor.document;
              var scrollable = CKEDITOR.env.quirks ? doc.getBody() : doc.getDocumentElement();

              if (scrollable.$.scrollHeight < scrollable.$.clientHeight) {
                scrollable.setStyle('overflow-y', 'hidden');
              } else {
                scrollable.removeStyle('overflow-y');
              }
            }, null, null, 10000);
          }
        });
      }
      return !!editor;
    },
    attachInlineEditor: function attachInlineEditor(element, format, mainToolbarId, floatedToolbarId) {
      this._loadExternalPlugins(format);

      format.editorSettings.drupal = {
        format: format.format
      };

      var settings = $.extend(true, {}, format.editorSettings);

      if (mainToolbarId) {
        var settingsOverride = {
          extraPlugins: 'sharedspace',
          removePlugins: 'floatingspace,elementspath',
          sharedSpaces: {
            top: mainToolbarId
          }
        };

        var sourceButtonFound = false;
        for (var i = 0; !sourceButtonFound && i < settings.toolbar.length; i++) {
          if (settings.toolbar[i] !== '/') {
            for (var j = 0; !sourceButtonFound && j < settings.toolbar[i].items.length; j++) {
              if (settings.toolbar[i].items[j] === 'Source') {
                sourceButtonFound = true;

                settings.toolbar[i].items[j] = 'Sourcedialog';
                settingsOverride.extraPlugins += ',sourcedialog';
                settingsOverride.removePlugins += ',sourcearea';
              }
            }
          }
        }

        settings.extraPlugins += ',' + settingsOverride.extraPlugins;
        settings.removePlugins += ',' + settingsOverride.removePlugins;
        settings.sharedSpaces = settingsOverride.sharedSpaces;
      }

      element.setAttribute('contentEditable', 'true');

      return !!CKEDITOR.inline(element, settings);
    },
    _loadExternalPlugins: function _loadExternalPlugins(format) {
      var externalPlugins = format.editorSettings.drupalExternalPlugins;

      if (externalPlugins) {
        Object.keys(externalPlugins || {}).forEach(function (pluginName) {
          CKEDITOR.plugins.addExternal(pluginName, externalPlugins[pluginName], '');
        });
        delete format.editorSettings.drupalExternalPlugins;
      }
    }
  };

  Drupal.ckeditor = {
    saveCallback: null,

    openDialog: function openDialog(editor, url, existingValues, saveCallback, dialogSettings) {
      var $target = $(editor.container.$);
      if (editor.elementMode === CKEDITOR.ELEMENT_MODE_REPLACE) {
        $target = $target.find('.cke_contents');
      }

      $target.css('position', 'relative').find('.ckeditor-dialog-loading').remove();

      var classes = dialogSettings.dialogClass ? dialogSettings.dialogClass.split(' ') : [];
      classes.push('ui-dialog--narrow');
      dialogSettings.dialogClass = classes.join(' ');
      dialogSettings.autoResize = window.matchMedia('(min-width: 600px)').matches;
      dialogSettings.width = 'auto';

      var $content = $('<div class="ckeditor-dialog-loading"><span style="top: -40px;" class="ckeditor-dialog-loading-link">' + Drupal.t('Loading...') + '</span></div>');
      $content.appendTo($target);

      var ckeditorAjaxDialog = Drupal.ajax({
        dialog: dialogSettings,
        dialogType: 'modal',
        selector: '.ckeditor-dialog-loading-link',
        url: url,
        progress: { type: 'throbber' },
        submit: {
          editor_object: existingValues
        }
      });
      ckeditorAjaxDialog.execute();

      window.setTimeout(function () {
        $content.find('span').animate({ top: '0px' });
      }, 1000);

      Drupal.ckeditor.saveCallback = saveCallback;
    }
  };

  $(window).on('dialogcreate', function (e, dialog, $element, settings) {
    $('.ui-dialog--narrow').css('zIndex', CKEDITOR.config.baseFloatZIndex + 1);
  });

  $(window).on('dialog:beforecreate', function (e, dialog, $element, settings) {
    $('.ckeditor-dialog-loading').animate({ top: '-40px' }, function () {
      $(this).remove();
    });
  });

  $(window).on('editor:dialogsave', function (e, values) {
    if (Drupal.ckeditor.saveCallback) {
      Drupal.ckeditor.saveCallback(values);
    }
  });

  $(window).on('dialog:afterclose', function (e, dialog, $element) {
    if (Drupal.ckeditor.saveCallback) {
      Drupal.ckeditor.saveCallback = null;
    }
  });

  $(document).on('drupalViewportOffsetChange', function () {
    CKEDITOR.config.autoGrow_maxHeight = 0.7 * (window.innerHeight - displace.offsets.top - displace.offsets.bottom);
  });

  function redirectTextareaFragmentToCKEditorInstance() {
    var hash = window.location.hash.substr(1);
    var element = document.getElementById(hash);
    if (element) {
      var editor = CKEDITOR.dom.element.get(element).getEditor();
      if (editor) {
        var id = editor.container.getAttribute('id');
        window.location.replace('#' + id);
      }
    }
  }
  $(window).on('hashchange.ckeditor', redirectTextareaFragmentToCKEditorInstance);

  CKEDITOR.config.autoGrow_onStartup = true;

  CKEDITOR.timestamp = drupalSettings.ckeditor.timestamp;

  if (AjaxCommands) {
    AjaxCommands.prototype.ckeditor_add_stylesheet = function (ajax, response, status) {
      var editor = CKEDITOR.instances[response.editor_id];

      if (editor) {
        response.stylesheets.forEach(function (url) {
          editor.document.appendStyleSheet(url);
        });
      }
    };
  }
})(Drupal, Drupal.debounce, CKEDITOR, jQuery, Drupal.displace, Drupal.AjaxCommands);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, CKEDITOR) {
  var convertToOffCanvasCss = function convertToOffCanvasCss(originalCss) {
    var selectorPrefix = '#drupal-off-canvas ';
    var skinPath = '' + CKEDITOR.basePath + CKEDITOR.skinName + '/';
    var css = originalCss.substring(originalCss.indexOf('*/') + 2).trim().replace(/}/g, '}' + selectorPrefix).replace(/,/g, ',' + selectorPrefix).replace(/url\(/g, skinPath);
    return '' + selectorPrefix + css;
  };

  var insertCss = function insertCss(cssToInsert) {
    var offCanvasCss = document.createElement('style');
    offCanvasCss.innerHTML = cssToInsert;
    offCanvasCss.setAttribute('id', 'ckeditor-off-canvas-reset');
    document.body.appendChild(offCanvasCss);
  };

  var addCkeditorOffCanvasCss = function addCkeditorOffCanvasCss() {
    if (document.getElementById('ckeditor-off-canvas-reset')) {
      return;
    }

    CKEDITOR.skinName = CKEDITOR.skin.name;

    var editorCssPath = CKEDITOR.skin.getPath('editor');
    var dialogCssPath = CKEDITOR.skin.getPath('dialog');

    var storedOffCanvasCss = window.localStorage.getItem('Drupal.off-canvas.css.' + editorCssPath + dialogCssPath);

    if (storedOffCanvasCss) {
      insertCss(storedOffCanvasCss);
      return;
    }

    $.when($.get(editorCssPath), $.get(dialogCssPath)).done(function (editorCss, dialogCss) {
      var offCanvasEditorCss = convertToOffCanvasCss(editorCss[0]);
      var offCanvasDialogCss = convertToOffCanvasCss(dialogCss[0]);
      var cssToInsert = '#drupal-off-canvas .cke_inner * {background: transparent;}\n          ' + offCanvasEditorCss + '\n          ' + offCanvasDialogCss;
      insertCss(cssToInsert);

      if (CKEDITOR.timestamp && editorCssPath.indexOf(CKEDITOR.timestamp) !== -1 && dialogCssPath.indexOf(CKEDITOR.timestamp) !== -1) {
        window.localStorage.setItem('Drupal.off-canvas.css.' + editorCssPath + dialogCssPath, cssToInsert);
      }
    });
  };

  addCkeditorOffCanvasCss();
})(jQuery, CKEDITOR);;
/**
 * @file
 * JavaScript behaviors for terms of service.
 */

(function ($, Drupal) {

  'use strict';

  // @see http://api.jqueryui.com/dialog/
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.termsOfServiceModal = Drupal.webform.termsOfServiceModal || {};
  Drupal.webform.termsOfServiceModal.options = Drupal.webform.termsOfServiceModal.options || {};

  /**
   * Initialize terms of service element.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformTermsOfService = {
    attach: function (context) {
      $(context).find('.js-form-type-webform-terms-of-service').once('webform-terms-of-service').each(function () {
        var $element = $(this);
        var $a = $element.find('label a');
        var $details = $element.find('.webform-terms-of-service-details');

        var type = $element.attr('data-webform-terms-of-service-type');

        // Initialize the modal.
        if (type === 'modal') {
          // Move details title to attribute.
          var $title = $element.find('.webform-terms-of-service-details--title');
          if ($title.length) {
            $details.attr('title', $title.text());
            $title.remove();
          }

          var options = $.extend({
            modal: true,
            autoOpen: false,
            minWidth: 600,
            maxWidth: 800
          }, Drupal.webform.termsOfServiceModal.options);
          $details.dialog(options);
        }

        // Add aria-* attributes.
        if (type !== 'modal') {
          $a.attr({
            'aria-expanded': false,
            'aria-controls': $details.attr('id')
          });
        }

        // Set event handlers.
        $a.click(openDetails)
          .on('keydown', function (event) {
            // Space or Return.
            if (event.which === 32 || event.which === 13) {
              openDetails(event);
            }
          });

        function openDetails(event) {
          if (type === 'modal') {
            $details.dialog('open');
          }
          else {
            var expanded = ($a.attr('aria-expanded') === 'true');

            // Toggle `aria-expanded` attributes on link.
            $a.attr('aria-expanded', !expanded);

            // Toggle details.
            $details[expanded ? 'slideUp' : 'slideDown']();
          }
          event.preventDefault();
        }
      });
    }
  };

})(jQuery, Drupal);
;
