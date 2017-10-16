<?php
/*
* index.php
*
* luis Daniel Mora Delgado @ BlackBohr | @fobos
*
* MIT License
*
* Copyright (c) 2017 Luis Daniel Mora Delgado / Black Bohr | @fobos
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* ----------------------------------------------------------------------------
*                           Phantom Platform
* ----------------------------------------------------------------------------
* This version of Phantom Platform is not yet a full release,
* this version uses Flat UI and some color variations, made by designmodo, please visit:
* http://designmodo.github.io/Flat-UI/ for more information
*
* This version uses PHP 7.0.X, all dependencies are included, this version doesn't use composer
* or any package manager for php, although it can be used in PHP 5.0.X but beware of some functions
* that may doesn't exist on PHP 5 or viceversa.
*
* This platform is made for FLOSSPA and events made by FLOSSPA, please visit https://floss-pa.net/
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Phantom | Floss-pa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Mobile Specific Metas -->
    <meta name="author" content="BlackBohr | Floss-pa">
    <meta name="description" content="Phantom Plaform for Floss-pa">
    <meta name="keywords" content="Phantom, BlackBohr, Floss-pa">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Libraries CSS -->
    <link rel="stylesheet" href="./stylesheets/bootstrap.css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./stylesheets/FlatUI.css/flat-ui.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./stylesheets/material_icons.css/material-icons.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./stylesheets/font-awesome.css/font-awesome.css" type="text/css" media="screen">
    <!-- Favicons For the Web Page
    <link rel="apple-touch-icon" sizes="57x57" href="./images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicons/favicon-16x16.png">
    <link rel="manifest" href="./images/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="./images/favicons/ms-icon-144x144.png">
    -->
    <meta name="msapplication-TileColor" content="#FF3200">
    <meta name="theme-color" content="#FF3200">
  </head>
  <body>
    <!-- Static navbar -->
    <?php
      include("./nav.php");
    ?>
    <!-- BEGIN CONTENT -->
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Container</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <h2>Flat UI Icons</h2>
        <i class="fui-triangle-up"> fui-triangle-up</i> <i class="fui-triangle-down"> fui-triangle-down</i> <i class="fui-triangle-up-small"> fui-triangle-up-small</i> <i class="fui-triangle-down-small"> fui-triangle-down-small</i> <i class="fui-triangle-left-large"> fui-triangle-left-large</i> <i class="fui-triangle-right-large"> fui-triangle-right-large</i> <i class="fui-arrow-left"> fui-arrow-left</i> <i class="fui-arrow-right"> fui-arrow-right</i>
        <i class="fui-plus"> fui-plus</i> <i class="fui-cross"> fui-cross</i> <i class="fui-check"> fui-check</i> <i class="fui-radio-unchecked"> fui-radio-unchecked</i> <i class="fui-radio-checked"> fui-radio-checked</i> <i class="fui-checkbox-unchecked"> fui-checkbox-unchecked</i> <i class="fui-checkbox-checked"> fui-checkbox-checked</i> <i class="fui-info-circle"> fui-info-circle</i>
        <i class="fui-alert-circle"> fui-alert-circle</i> <i class="fui-question-circle"> fui-question-circle</i> <i class="fui-check-circle"> fui-check-circle</i> <i class="fui-cross-circle"> fui-cross-circle</i> <i class="fui-plus-circle"> fui-plus-circle</i> <i class="fui-pause"> fui-pause</i> <i class="fui-play"> fui-play</i> <i class="fui-volume"> fui-volume</i>
        <i class="fui-mute"> fui-mute</i> <i class="fui-resize"> fui-resize</i> <i class="fui-list"> fui-list</i> <i class="fui-list-thumbnailed"> fui-list-thumbnailed</i> <i class="fui-list-small-thumbnails"> fui-list-small-thumbnails</i> <i class="fui-list-large-thumbnails"> fui-list-large-thumbnails</i> <i class="fui-list-numbered"> fui-list-numbered</i> <i class="fui-list-numbered"> fui-list-numbered</i>
        <i class="fui-list-columned"> fui-list-columned</i> <i class="fui-list-bulleted"> fui-list-bulleted</i> <i class="fui-window"> fui-window</i> <i class="fui-windows"> fui-windows</i> <i class="fui-loop"> fui-loop</i> <i class="fui-cmd"> fui-cmd</i> <i class="fui-mic"> fui-mic</i> <i class="fui-heart"> fui-heart</i>
        <i class="fui-location"> fui-location</i> <i class="fui-resize"> fui-resize</i> <i class="fui-list"> fui-list</i> <i class="fui-list-thumbnailed"> fui-list-thumbnailed</i> <i class="fui-list-small-thumbnails"> fui-list-small-thumbnails</i> <i class="fui-list-large-thumbnails"> fui-list-large-thumbnails</i> <i class="fui-list-numbered"> fui-list-numbered</i> <i class="fui-list-numbered"> fui-list-numbered</i>
        <i class="fui-mute"> fui-mute</i> <i class="fui-resize"> fui-resize</i> <i class="fui-list"> fui-list</i> <i class="fui-list-thumbnailed"> fui-list-thumbnailed</i> <i class="fui-list-small-thumbnails"> fui-list-small-thumbnails</i> <i class="fui-list-large-thumbnails"> fui-list-large-thumbnails</i> <i class="fui-list-numbered"> fui-list-numbered</i> <i class="fui-list-numbered"> fui-list-numbered</i>
        <br>
        <br>
        <h2>Material Design Icons</h2>
        <div class="col-md-12">
          <i class="material-icons">cloud 3d_rotation  ac_unit  access_alarm  access_alarms  access_time  accessibility  accessible  account_balance  account_balance_wallet  account_box  account_circle  adb  add  add_a_photo  add_alarm  add_alert  add_box  add_circle  add_circle_outline  add_location  add_shopping_cart  add_to_photos  add_to_queue  adjust  airline_seat_flat  airline_seat_flat_angled  airline_seat_individual_suite  airline_seat_legroom_extra  airline_seat_legroom_normal
          <br>
          airline_seat_legroom_reduced  airline_seat_recline_extra  airline_seat_recline_normal  airplanemode_active  airplanemode_inactive  airplay  airport_shuttle  alarm  alarm_add  alarm_off  alarm_on  album  all_inclusive  all_out  android  announcement  apps  archive  arrow_back  arrow_downward  arrow_drop_down  arrow_drop_down_circle  arrow_drop_up  arrow_forward  arrow_upward  art_track  aspect_ratio  assessment  assignment  assignment_ind  assignment_late  assignment_return
          <br>
          assignment_returned  assignment_turned_in  assistant  assistant_photo  attach_file  attach_money  attachment  audiotrack  autorenew  av_timer  backspace  backup  battery_alert  battery_charging_full  battery_full  battery_std  battery_unknown  beach_access  beenhere  block  bluetooth  bluetooth_audio  bluetooth_connected  bluetooth_disabled  bluetooth_searching  blur_circular  blur_linear  blur_off  blur_on  book  bookmark  bookmark_border  border_all  border_bottom  border_clear
          <br>
          border_color  border_horizontal  border_inner  border_left  border_outer  border_right  border_style  border_top  border_vertical  branding_watermark  brightness_1  brightness_2  brightness_3  brightness_4  brightness_5  brightness_6  brightness_7  brightness_auto  brightness_high  brightness_low  brightness_medium  broken_image  brush  bubble_chart  bug_report  build  burst_mode  business  business_center  cached  cake  call  call_end  call_made  call_merge  call_missed
          <br>
          call_missed_outgoing  call_received  call_split  call_to_action  camera  camera_alt  camera_enhance  camera_front  camera_rear  camera_roll  cancel  card_giftcard  card_membership  card_travel  casino  cast  cast_connected  center_focus_strong  center_focus_weak  change_history  chat  chat_bubble  chat_bubble_outline  check  check_box  check_box_outline_blank  check_circle  chevron_left  chevron_right  child_care  child_friendly  chrome_reader_mode  class  clear  clear_all  close
          <br>
          closed_caption  cloud  cloud_circle  cloud_done  cloud_download  cloud_off  cloud_queue  cloud_upload  code  collections  collections_bookmark  color_lens  colorize  comment  compare  compare_arrows  computer  confirmation_number  contact_mail  contact_phone  contacts  content_copy  content_cut  content_paste  control_point  control_point_duplicate  copyright  create  create_new_folder  credit_card  crop  crop_16_9  crop_3_2  crop_5_4  crop_7_5  crop_din  crop_free  crop_landscape
          <br>
          crop_original  crop_portrait  crop_rotate  crop_square  dashboard  data_usage  date_range  dehaze  delete  delete_forever  delete_sweep  description  desktop_mac  desktop_windows  details  developer_board  developer_mode  device_hub  devices  devices_other  dialer_sip  dialpad  directions  directions_bike  directions_boat  directions_bus  directions_car  directions_railway  directions_run  directions_subway  directions_transit  directions_walk  disc_full  dns  do_not_disturb
          <br>do_not_disturb_alt  do_not_disturb_off  do_not_disturb_on  dock  domain  done  done_all  donut_large  donut_small  drafts  drag_handle  drive_eta  dvr  edit  edit_location  eject  email  enhanced_encryption  equalizer  error  error_outline  euro_symbol  ev_station  event  event_available  event_busy  event_note  event_seat  exit_to_app  expand_less  expand_more  explicit  explore  exposure  exposure_neg_1  exposure_neg_2  exposure_plus_1  exposure_plus_2  exposure_zero  extension
          <br>
          face  fast_forward  fast_rewind  favorite  favorite_border  featured_play_list  featured_video  feedback  fiber_dvr  fiber_manual_record  fiber_new  fiber_pin  fiber_smart_record  file_download  file_upload  filter  filter_1  filter_2  filter_3  filter_4  filter_5  filter_6  filter_7  filter_8  filter_9  filter_9_plus  filter_b_and_w  filter_center_focus  filter_drama  filter_frames  filter_hdr  filter_list  filter_none  filter_tilt_shift  filter_vintage  find_in_page  find_replace
          <br>
          fingerprint  first_page  fitness_center  flag  flare  flash_auto  flash_off  flash_on  flight  flight_land  flight_takeoff  flip  flip_to_back  flip_to_front  folder  folder_open  folder_shared  folder_special  font_download  format_align_center  format_align_justify  format_align_left  format_align_right  format_bold  format_clear  format_color_fill  format_color_reset  format_color_text  format_indent_decrease  format_indent_increase  format_italic  format_line_spacing
          <br>
          format_list_bulleted  format_list_numbered  format_paint  format_quote  format_shapes  format_size  format_strikethrough  format_textdirection_l_to_r  format_textdirection_r_to_l  format_underlined  forum  forward  forward_10  forward_30  forward_5  free_breakfast  fullscreen  fullscreen_exit  functions  g_translate  gamepad  games  gavel  gesture  get_app  gif  golf_course  gps_fixed  gps_not_fixed  gps_off  grade  gradient  grain  graphic_eq  grid_off  grid_on  group  group_add
          <br>
          group_work  hd  hdr_off  hdr_on  hdr_strong  hdr_weak  headset  headset_mic  healing  hearing  help  help_outline  high_quality  highlight  highlight_off  history  home  hot_tub  hotel  hourglass_empty  hourglass_full  http  https  image  image_aspect_ratio  import_contacts  import_export  important_devices  inbox  indeterminate_check_box  info  info_outline  input  insert_chart  insert_comment  insert_drive_file  insert_emoticon  insert_invitation  insert_link  insert_photo
          <br>
          invert_colors  invert_colors_off  iso  keyboard  keyboard_arrow_down  keyboard_arrow_left  keyboard_arrow_right  keyboard_arrow_up  keyboard_backspace  keyboard_capslock  keyboard_hide  keyboard_return  keyboard_tab  keyboard_voice  kitchen  label  label_outline  landscape  language  laptop  laptop_chromebook  laptop_mac  laptop_windows  last_page  launch  layers  layers_clear  leak_add  leak_remove  lens  library_add  library_books  library_music  lightbulb_outline  line_style
          <br>
          line_weight  linear_scale  link  linked_camera  list  live_help  live_tv  local_activity  local_airport  local_atm  local_bar  local_cafe  local_car_wash  local_convenience_store  local_dining  local_drink  local_florist  local_gas_station  local_grocery_store  local_hospital  local_hotel  local_laundry_service  local_library  local_mall  local_movies  local_offer  local_parking  local_pharmacy  local_phone  local_pizza  local_play  local_post_office  local_printshop  local_see
          <br>
          local_shipping  local_taxi  location_city  location_disabled  location_off  location_on  location_searching  lock  lock_open  lock_outline  looks  looks_3  looks_4  looks_5  looks_6  looks_one  looks_two  loop  loupe  low_priority  loyalty  mail  mail_outline  map  markunread  markunread_mailbox  memory  menu  merge_type  message  mic  mic_none  mic_off  mms  mode_comment  mode_edit  monetization_on  money_off  monochrome_photos  mood  mood_bad  more  more_horiz  more_vert  motorcycle
          <br>
          mouse  move_to_inbox  movie  movie_creation  movie_filter  multiline_chart  music_note  music_video  my_location  nature  nature_people  navigate_before  navigate_next  navigation  near_me  network_cell  network_check  network_locked  network_wifi  new_releases  next_week  nfc  no_encryption  no_sim  not_interested  note  note_add  notifications  notifications_active  notifications_none  notifications_off  notifications_paused  offline_pin  ondemand_video  opacity  open_in_browser
          <br>
          open_in_new  open_with  pages  pageview  palette  pan_tool  panorama  panorama_fish_eye  panorama_horizontal  panorama_vertical  panorama_wide_angle  party_mode  pause  pause_circle_filled  pause_circle_outline  payment  people  people_outline  perm_camera_mic  perm_contact_calendar  perm_data_setting  perm_device_information  perm_identity  perm_media  perm_phone_msg  perm_scan_wifi  person  person_add  person_outline  person_pin  person_pin_circle  personal_video  pets  phone
          <br>
          phone_android  phone_bluetooth_speaker  phone_forwarded  phone_in_talk  phone_iphone  phone_locked  phone_missed  phone_paused  phonelink  phonelink_erase  phonelink_lock  phonelink_off  phonelink_ring  phonelink_setup  photo  photo_album  photo_camera  photo_filter  photo_library  photo_size_select_actual  photo_size_select_large  photo_size_select_small  picture_as_pdf  picture_in_picture  picture_in_picture_alt  pie_chart  pie_chart_outlined  pin_drop  place  play_arrow
          <br>
          play_circle_filled  play_circle_outline  play_for_work  playlist_add  playlist_add_check  playlist_play  plus_one  poll  polymer  pool  portable_wifi_off  portrait  power  power_input  power_settings_new  pregnant_woman  present_to_all  print  priority_high  public  publish  query_builder  question_answer  queue  queue_music  queue_play_next  radio  radio_button_checked  radio_button_unchecked  rate_review  receipt  recent_actors  record_voice_over  redeem  redo  refresh  remove
          <br>
          remove_circle  remove_circle_outline  remove_from_queue  remove_red_eye  remove_shopping_cart  reorder  repeat  repeat_one  replay  replay_10  replay_30  replay_5  reply  reply_all  report  report_problem  restaurant  restaurant_menu  restore  restore_page  ring_volume  room  room_service  rotate_90_degrees_ccw  rotate_left  rotate_right  rounded_corner  router  rowing  rss_feed  rv_hookup  satellite  save  scanner  schedule  school  screen_lock_landscape  screen_lock_portrait
          <br>
          screen_lock_rotation  screen_rotation  screen_share  sd_card  sd_storage  search  security  select_all  send  sentiment_dissatisfied  sentiment_neutral  sentiment_satisfied  sentiment_very_dissatisfied  sentiment_very_satisfied  settings  settings_applications  settings_backup_restore  settings_bluetooth  settings_brightness  settings_cell  settings_ethernet  settings_input_antenna  settings_input_component  settings_input_composite  settings_input_hdmi  settings_input_svideo
          <br>
          settings_overscan  settings_phone  settings_power  settings_remote  settings_system_daydream  settings_voice  share  shop  shop_two  shopping_basket  shopping_cart  short_text  show_chart  shuffle  signal_cellular_4_bar  signal_cellular_connected_no_internet_4_bar  signal_cellular_no_sim  signal_cellular_null  signal_cellular_off  signal_wifi_4_bar  signal_wifi_4_bar_lock  signal_wifi_off  sim_card  sim_card_alert  skip_next  skip_previous  slideshow  slow_motion_video  smartphone
          <br>
          <br>
          smoke_free  smoking_rooms  sms  sms_failed  snooze  sort  sort_by_alpha  spa  space_bar  speaker  speaker_group  speaker_notes  speaker_notes_off  speaker_phone  spellcheck  star  star_border  star_half  stars  stay_current_landscape  stay_current_portrait  stay_primary_landscape  stay_primary_portrait  stop  stop_screen_share  storage  store  store_mall_directory  straighten  streetview  strikethrough_s  style  subdirectory_arrow_left  subdirectory_arrow_right  subject  subscriptions
          <br>
          subtitles  subway  supervisor_account  surround_sound  swap_calls  swap_horiz  swap_vert  swap_vertical_circle  switch_camera  switch_video  sync  sync_disabled  sync_problem  system_update  system_update_alt  tab  tab_unselected  tablet  tablet_android  tablet_mac  tag_faces  tap_and_play  terrain  text_fields  text_format  textsms  texture  theaters  thumb_down  thumb_up  thumbs_up_down  time_to_leave  timelapse  timeline  timer  timer_10  timer_3  timer_off  title  toc  today  toll
          <br>
          tonality  touch_app  toys  track_changes  traffic  train  tram  transfer_within_a_station  transform  translate  trending_down  trending_flat  trending_up  tune  turned_in  turned_in_not  tv  unarchive  undo  unfold_less  unfold_more  update  usb  verified_user  vertical_align_bottom  vertical_align_center  vertical_align_top  vibration  video_call  video_label  video_library  videocam  videocam_off  videogame_asset  view_agenda  view_array  view_carousel  view_column  view_comfy
          <br>
          view_compact  view_day  view_headline  view_list  view_module  view_quilt  view_stream  view_week  vignette  visibility  visibility_off  voice_chat  voicemail  volume_down  volume_mute  volume_off  volume_up  vpn_key  vpn_lock  wallpaper  warning  watch  watch_later  wb_auto  wb_cloudy  wb_incandescent  wb_iridescent  wb_sunny  wc  web  web_asset  weekend  whatshot  widgets  wifi  wifi_lock  wifi_tethering  work  wrap_text  youtube_searched_for  zoom_in  zoom_out  zoom_out_map </i>
        </div>
        <br>
        <h2>Font Awesome Icons</h2>
        <i class="fa fa-sort"></i>
        <br>
        <br>
        <p>
          <a class="btn btn-lg btn-primary" href="javascript:;" role="button">View navbar docs &raquo;</a>
        </p>
          <div class="btn-group">
              <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
              <ul class="dropdown-menu dropdown-menu-inverse" role="menu">
                <li class="active"><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <h4>Vertical Slider</h4>
                  <div id="vertical-slider" style="height: 200px;"></div>
                  <h4>Horizontal Slider</h4>
                  <div id="slider"></div>
              </div>
          </div><!-- /.row -->
      </div>

      <div class="jumbotron">
        <h1>Form Components</h1>
        <input type="text" placeholder="..." class="form-control flat" />
        <select class="form-control select select-primary mbl" data-toggle="select">
            <optgroup label="Profile">
              <option value="0">My Profile</option>
              <option value="1">My Friends</option>
            </optgroup>
            <optgroup label="System">
              <option value="2">Messages</option>
              <option value="3">My Settings</option>
              <option value="4">Logout</option>
            </optgroup>
        </select>
        <h4>Tagsinput</h4>
          <div class="row">
            <div class="col-md-7 mtl">
              <h5 class="demo-panel-title">Tags Input</h5>
              <input name="tagsinput-01" class="tagsinput" value="Clean, Fresh, Modern, Unique" />
              <h5 class="demo-panel-title">Tags Input Primary with typeahead functionality</h5>
              <div class="tagsinput-primary">
                <input name="tagsinput-02" class="tagsinput tagsinput-typeahead input-lg" value="Alabama"/>
              </div>

              <h5 class="demo-panel-title">Typeahead only</h5>
              <div class="form-group">
                <input class="form-control typeahead-only input-lg" type="text" id="typeahead-demo-01" />
              </div>

              <h5 class="demo-panel-title">Typeahead with feedback icons</h5>
              <p>Huge</p>
              <div class="form-group">
                <input class="form-control typeahead-only input-hg" type="text" id="typeahead-demo-01" />
                <span class="form-control-feedback control-feedback-hg fui-location"></span>
              </div>

              <p>Default</p>
              <div class="form-group">
                <input class="form-control typeahead-only" type="text" id="typeahead-demo-01" />
                <span class="form-control-feedback fui-location"></span>
              </div>

              <p>Large</p>
              <div class="form-group">
                <input class="form-control typeahead-only input-lg" type="text" id="typeahead-demo-01" />
                <span class="form-control-feedback control-feedback-lg  fui-location"></span>
              </div>

              <p>Small</p>
              <div class="form-group">
                <input class="form-control typeahead-only input-sm" type="text" id="typeahead-demo-01" />
                <span class="form-control-feedback control-feedback-sm fui-location"></span>
              </div>
              <p>Progress Bar</p>
              <div class="progress">
                <div class="progress-bar" style="width: 50%;"></div>
                <div class="progress-bar progress-bar-warning" style="width: 10%;"></div>
                <div class="progress-bar progress-bar-danger" style="width: 10%;"></div>
                <div class="progress-bar progress-bar-success" style="width: 10%;"></div>
                <div class="progress-bar progress-bar-info" style="width: 20%;"></div>
              </div>
              <!-- Pagers -->
              <ul class="pager">
                <li class="previous">
                  <a href="#">
                    <span>
                      <i class="fui-arrow-left"></i>
                      All messages
                    </span>
                  </a>
                </li>

                <li class="next">
                  <a href="#">
                    <i class="fui-arrow-right"></i>
                  </a>
                </li>
              </ul>

              <!-- Pagination -->
              <div>
                <ul class="pagination">
                  <li class="previous">
                    <a href="#" class="fui-arrow-left"></a>
                  </li>

                  <!-- Make dropdown appear above pagination -->
                  <li class="pagination-dropdown dropup">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fui-triangle-up"></i>
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">10-20</a>
                      </li>
                    </ul>
                  </li>

                  <li class="next">
                    <a href="#" class="fui-arrow-right"></a>
                  </li>
                </ul>
              </div>

              <ul class="pagination-plain">
                <li class="previous">
                  <a href="#">Previous</a>
                </li>
                <li>
                  <a href="#">1</a>
                </li>
                <li class="next">
                  <a href="#">Newer</a>
                </li>
              </ul>

              <!-- Default switch -->
              <input type="checkbox" checked data-toggle="switch" name="default-switch" id="switch-01" />

              <!-- Square switch -->
              <div class="bootstrap-switch-square">
                <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
              </div>
              <p data-toggle="tooltip" title="Tooltip copy"></p>
            </div>
          </div>
          <!-- END ROW -->
      </div>
      <div class="jumbotron">
        <h1>Todo list</h1>
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="todo">
                <div class="todo-search">
                  <input class="todo-search-field" type="search" value="" placeholder="Search" />
                </div>
                <ul>
                  <li class="todo-done">
                    <div class="todo-icon fui-user"></div>
                    <div class="todo-content">
                      <h4 class="todo-name">
                        Meet <strong>Adrian</strong> at <strong>6pm</strong>
                      </h4>
                      Times Square
                    </div>
                  </li>
                  <li>
                    <div class="todo-icon fui-list"></div>
                    <div class="todo-content">
                      <h4 class="todo-name">
                        Chat with <strong>V.Kudinov</strong>
                      </h4>
                      Skype conference an 9 am
                    </div>
                  </li>
                  <li>
                    <div class="todo-icon fui-eye"></div>
                    <div class="todo-content">
                      <h4 class="todo-name">
                        Watch <strong>Iron Man</strong>
                      </h4>
                      1998 Broadway
                    </div>
                  </li>
                  <li>
                    <div class="todo-icon fui-time"></div>
                    <div class="todo-content">
                      <h4 class="todo-name">
                        Fix bug on a <strong>Website</strong>
                      </h4>
                      As soon as possible
                    </div>
                  </li>
                </ul>
              </div><!-- /.todo -->
            </div><!-- /.col-md-4 -->
          </div><!-- /.row -->
      </div>

      <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="javascript:;" role="button">View navbar docs &raquo;</a>
        </p>
      </div>
    </div>
    <!-- END CONTENT -->

    <!-- Javascript  -->
    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="./javascript/jquery.min.js" type="text/javascript"></script>
    <script src="./javascript/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./javascript/video.js" type="text/javascript"></script>
    <script src="./javascript/flatui.js/flat-ui.js" type="text/javascript"></script>
    <script src="./javascript/flatui.js/application.js" type="text/javascript"></script>
    <script type="text/javascript">
      var states = new Bloodhound
      ({
        datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.word); },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        limit: 4,
        local: [
          { word: "Alabama" },
          { word: "Alaska" },
          { word: "Arizona" },
          { word: "Arkansas" },
          { word: "California" },
          { word: "Colorado" }
        ]
      });

      states.initialize();

      $('input.tagsinput').tagsinput();

      $('input.tagsinput-typeahead').tagsinput('input').typeahead(null,
      {
        name: 'states',
        displayKey: 'word',
        source: states.ttAdapter()
      });

      $('input.typeahead-only').typeahead(null,
      {
        name: 'states',
        displayKey: 'word',
        source: states.ttAdapter()
      });

    </script>
  </body>
</html>
