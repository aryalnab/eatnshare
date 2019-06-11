/**
 * @file
 * JavaScript behaviors for RateIt integration.
 */

(function ($, Drupal) {

  'use strict';

  // All options can be override using custom data-* attributes.
  // @see https://github.com/gjunge/rateit.js/wiki#options.

  /**
   * Initialize rating element using RateIt.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformRating = {
    attach: function (context) {
      if (!$.fn.rateit) {
        return;
      }

      $(context)
        .find('[data-rateit-backingfld]')
        .once('webform-rating')
        .each(function () {
          var $rateit = $(this);
          var $input = $($rateit.attr('data-rateit-backingfld'));

          // Rateit only initialize inputs on load.
          if (document.readyState === 'complete') {
            $rateit.rateit();
          }

          // Update the RateIt widget when the input's value has changed.
          // @see webform.states.js
          $input.on('change', function () {
            $rateit.rateit('value', $input.val());
          });

          // Set RateIt widget to be readonly when the input is disabled.
          // @see webform.states.js
          $input.on('webform:disabled', function () {
            $rateit.rateit('readonly', $input.is(':disabled'));
          });
        });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for range element integration.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Display HTML5 range output in a left/right aligned number input.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformRangeOutputNumber = {
    attach: function (context) {
      $(context).find('.js-form-type-range').once('webform-range-output-number').each(function () {
        // Handle browser that don't support the HTML5 range input.
        if (Modernizr.inputtypes.range === false) {
          return;
        }

        var $element = $(this);
        var $input = $element.find('input[type="range"]');
        var $output = $element.find('input[type="number"]');
        if (!$output.length) {
          return;
        }

        // Set output value.
        $output.val($input.val());

        // Sync input and output values.
        $input.on('input', function () {
          $output.val($input.val());
        });
        $output.on('input', function () {
          $input.val($output.val());
        });
      });
    }
  };

  /**
   * Display HTML5 range output in a floating bubble.
   *
   * @type {Drupal~behavior}
   *
   * @see https://css-tricks.com/value-bubbles-for-range-inputs/
   * @see https://stackoverflow.com/questions/33794123/absolute-positioning-in-relation-to-a-inputtype-range
   */
  Drupal.behaviors.webformRangeOutputBubble = {
    attach: function (context) {
      $(context).find('.js-form-type-range').once('webform-range-output-bubble').each(function () {
        // Handle browser that don't support the HTML5 range input.
        if (Modernizr.inputtypes.range === false) {
          return;
        }

        var $element = $(this);
        var $input = $element.find('input[type="range"]');
        var $output = $element.find('output');
        var display = $output.attr('data-display');

        if (!$output.length) {
          return;
        }

        $element.css('position', 'relative');

        $input.on('input', function () {
          var inputValue = $input.val();

          // Set output text with prefix and suffix.
          var text = ($output.attr('data-field-prefix') || '') +
            inputValue +
            ($output.attr('data-field-suffix') || '');
          $output.text(text);

          // Set output top position.
          var top;
          if (display === 'above') {
            top = $input.position().top - $output.outerHeight() + 2;
          }
          else {
            top = $input.position().top + $input.outerHeight() + 2;
          }

          // It is impossible to accurately calculate the exact position of the
          // range's buttons so we only incrementally move the output bubble.
          var inputWidth = $input.outerWidth();
          var buttonPosition = Math.floor(inputWidth * (inputValue - $input.attr('min')) / ($input.attr('max') - $input.attr('min')));
          var increment = Math.floor(inputWidth / 5);
          var outputWidth = $output.outerWidth();

          // Set output left position.
          var left;
          if (buttonPosition <= increment) {
            left = 0;
          }
          else if (buttonPosition <= increment * 2) {
            left = (increment * 1.5) - outputWidth;
            if (left < 0) {
              left = 0;
            }
          }
          else if (buttonPosition <= increment * 3) {
            left = (increment * 2.5) - (outputWidth / 2);

          }
          else if (buttonPosition <= increment * 4) {
            left = (increment * 4) - outputWidth;
            if (left > (increment * 5) - outputWidth) {
              left = (increment * 5) - outputWidth;
            }
          }
          else if (buttonPosition <= inputWidth) {
            left = (increment * 5) - outputWidth;
          }
          // Also make sure to include the input's left position.
          left = Math.floor($input.position().left + left);

          // Finally, position the output.
          $output.css({top: top, left: left});
        })
          // Fake a change to position output at page load.
          .trigger('input');

        // Add fade in/out event handlers if opacity is defined.
        var defaultOpacity = $output.css('opacity');
        if (defaultOpacity < 1) {
          // Fade in/out on focus/blur of the input.
          $input.on('focus mouseover', function () {
            $output.stop().fadeTo('slow', 1);
          });
          $input.on('blur mouseout', function () {
            $output.stop().fadeTo('slow', defaultOpacity);
          });
          // Also fade in when focusing the output.
          $output.on('touchstart mouseover', function () {
            $output.stop().fadeTo('slow', 1);
          });
        }
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

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.password = {
    attach: function attach(context, settings) {
      var $passwordInput = $(context).find('input.js-password-field').once('password');

      if ($passwordInput.length) {
        var translate = settings.password;

        var $passwordInputParent = $passwordInput.parent();
        var $passwordInputParentWrapper = $passwordInputParent.parent();
        var $passwordSuggestions = void 0;

        $passwordInputParent.addClass('password-parent');

        $passwordInputParentWrapper.find('input.js-password-confirm').parent().append('<div aria-live="polite" aria-atomic="true" class="password-confirm js-password-confirm">' + translate.confirmTitle + ' <span></span></div>').addClass('confirm-parent');

        var $confirmInput = $passwordInputParentWrapper.find('input.js-password-confirm');
        var $confirmResult = $passwordInputParentWrapper.find('div.js-password-confirm');
        var $confirmChild = $confirmResult.find('span');

        if (settings.password.showStrengthIndicator) {
          var passwordMeter = '<div class="password-strength"><div class="password-strength__meter"><div class="password-strength__indicator js-password-strength__indicator"></div></div><div aria-live="polite" aria-atomic="true" class="password-strength__title">' + translate.strengthTitle + ' <span class="password-strength__text js-password-strength__text"></span></div></div>';
          $confirmInput.parent().after('<div class="password-suggestions description"></div>');
          $passwordInputParent.append(passwordMeter);
          $passwordSuggestions = $passwordInputParentWrapper.find('div.password-suggestions').hide();
        }

        var passwordCheckMatch = function passwordCheckMatch(confirmInputVal) {
          var success = $passwordInput.val() === confirmInputVal;
          var confirmClass = success ? 'ok' : 'error';

          $confirmChild.html(translate['confirm' + (success ? 'Success' : 'Failure')]).removeClass('ok error').addClass(confirmClass);
        };

        var passwordCheck = function passwordCheck() {
          if (settings.password.showStrengthIndicator) {
            var result = Drupal.evaluatePasswordStrength($passwordInput.val(), settings.password);

            if ($passwordSuggestions.html() !== result.message) {
              $passwordSuggestions.html(result.message);
            }

            $passwordSuggestions.toggle(result.strength !== 100);

            $passwordInputParent.find('.js-password-strength__indicator').css('width', result.strength + '%').removeClass('is-weak is-fair is-good is-strong').addClass(result.indicatorClass);

            $passwordInputParent.find('.js-password-strength__text').html(result.indicatorText);
          }

          if ($confirmInput.val()) {
            passwordCheckMatch($confirmInput.val());
            $confirmResult.css({ visibility: 'visible' });
          } else {
            $confirmResult.css({ visibility: 'hidden' });
          }
        };

        $passwordInput.on('input', passwordCheck);
        $confirmInput.on('input', passwordCheck);
      }
    }
  };

  Drupal.evaluatePasswordStrength = function (password, translate) {
    password = password.trim();
    var indicatorText = void 0;
    var indicatorClass = void 0;
    var weaknesses = 0;
    var strength = 100;
    var msg = [];

    var hasLowercase = /[a-z]/.test(password);
    var hasUppercase = /[A-Z]/.test(password);
    var hasNumbers = /[0-9]/.test(password);
    var hasPunctuation = /[^a-zA-Z0-9]/.test(password);

    var $usernameBox = $('input.username');
    var username = $usernameBox.length > 0 ? $usernameBox.val() : translate.username;

    if (password.length < 12) {
      msg.push(translate.tooShort);
      strength -= (12 - password.length) * 5 + 30;
    }

    if (!hasLowercase) {
      msg.push(translate.addLowerCase);
      weaknesses++;
    }
    if (!hasUppercase) {
      msg.push(translate.addUpperCase);
      weaknesses++;
    }
    if (!hasNumbers) {
      msg.push(translate.addNumbers);
      weaknesses++;
    }
    if (!hasPunctuation) {
      msg.push(translate.addPunctuation);
      weaknesses++;
    }

    switch (weaknesses) {
      case 1:
        strength -= 12.5;
        break;

      case 2:
        strength -= 25;
        break;

      case 3:
        strength -= 40;
        break;

      case 4:
        strength -= 40;
        break;
    }

    if (password !== '' && password.toLowerCase() === username.toLowerCase()) {
      msg.push(translate.sameAsUsername);

      strength = 5;
    }

    if (strength < 60) {
      indicatorText = translate.weak;
      indicatorClass = 'is-weak';
    } else if (strength < 70) {
      indicatorText = translate.fair;
      indicatorClass = 'is-fair';
    } else if (strength < 80) {
      indicatorText = translate.good;
      indicatorClass = 'is-good';
    } else if (strength <= 100) {
      indicatorText = translate.strong;
      indicatorClass = 'is-strong';
    }

    msg = translate.hasWeaknesses + '<ul><li>' + msg.join('</li><li>') + '</li></ul>';

    return {
      strength: strength,
      message: msg,
      indicatorText: indicatorText,
      indicatorClass: indicatorClass
    };
  };
})(jQuery, Drupal, drupalSettings);;
