<?php 
$gi_social_media = [
  ...( get_field( 'social_media_facebook', 'option' ) ? ['facebook' => get_field( 'social_media_facebook', 'option' )] : [] ),
  ...( get_field( 'social_media_instagram', 'option' ) ? ['instagram' => get_field( 'social_media_instagram', 'option' )] : [] ),
  ...( get_field( 'social_media_linkedin', 'option' ) ? ['linkedin' => get_field( 'social_media_linkedin', 'option' )] : [] ),
  ...( get_field( 'social_media_twitter', 'option' ) ? ['twitter' => get_field( 'social_media_twitter', 'option' )] : [] ),
  ...( get_field( 'social_media_youtube', 'option' ) ? ['youtube' => get_field( 'social_media_youtube', 'option' )] : [] ),
];
?>
<?php if ( count( $gi_social_media ) > 0 ): ?>
  <ul class="social-media">
    <?php if ( array_key_exists( 'facebook', $gi_social_media ) ): ?>
      <li class="icon facebook">
        <a href="<?php echo $gi_social_media['facebook']; ?>" target="_blank" rel="noopener" aria-label="Facebook Link">
          <span class="label">Facebook</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" role="img">
            <title>Facebook Icon</title>
            <path class="background" d="M400,200c0,110.46-89.54,200-200,200h0C89.54,400,0,310.46,0,200h0C0,89.54,89.54,0,200,0h0c110.46,0,200,89.54,200,200h0Z"/>
            <path class="foreground" d="M259.26,184.48l-3.33,26.75c-.56,4.47-4.35,7.83-8.84,7.83h-43.34v111.87c-4.57.41-9.2.62-13.88.62-10.46,0-20.69-1.05-30.57-3.04v-109.45h-33.33c-3.06,0-5.56-2.51-5.56-5.58v-33.48c0-3.07,2.5-5.58,5.56-5.58h33.33v-50.21c0-30.81,24.88-55.79,55.56-55.79h38.89c3.06,0,5.56,2.51,5.56,5.58v33.48c0,3.07-2.5,5.58-5.56,5.58h-27.78c-12.27,0-22.22,9.99-22.22,22.32v39.05h46.67c5.36,0,9.5,4.71,8.84,10.04Z"/>
          </svg>
        </a>
      </li>
    <?php endif; ?>
    <?php if ( array_key_exists( 'instagram', $gi_social_media ) ): ?>
      <li class="icon instagram">
        <a href="<?php echo $gi_social_media['instagram']; ?>" target="_blank" rel="noopener" aria-label="Instagram Link">
          <span class="label">Instagram</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" role="img">
            <title>Instagram Icon</title>
            <path class="background" d="M400,200c0,110.46-89.54,200-200,200h0C89.54,400,0,310.46,0,200h0C0,89.54,89.54,0,200,0h0c110.46,0,200,89.54,200,200h0Z"/>
            <path class="foreground" d="M254.26,95.09h-108.52c-27.96,0-50.64,22.68-50.64,50.64v108.52c0,27.96,22.68,50.64,50.64,50.64h108.52c27.96,0,50.64-22.68,50.64-50.64v-108.52c0-27.96-22.68-50.64-50.64-50.64ZM286.82,250.64c0,19.97-16.21,36.17-36.17,36.17h-101.29c-19.97,0-36.17-16.21-36.17-36.17v-101.29c0-19.97,16.21-36.17,36.17-36.17h101.29c19.97,0,36.17,16.21,36.17,36.17v101.29Z"/>
            <path class="foreground" d="M200.1,145.74c-29.95,0-54.26,24.31-54.26,54.26s24.31,54.26,54.26,54.26,54.26-24.31,54.26-54.26-24.31-54.26-54.26-54.26ZM200.1,236.17c-19.93,0-36.17-16.24-36.17-36.17s16.24-36.17,36.17-36.17,36.17,16.24,36.17,36.17-16.24,36.17-36.17,36.17Z"/>
            <path class="foreground" d="M257.98,152.97c-5.98,0-10.85-4.87-10.85-10.85s4.87-10.85,10.85-10.85,10.85,4.87,10.85,10.85-4.87,10.85-10.85,10.85Z"/>
          </svg>
        </a>
      </li>
    <?php endif; ?>
    <?php if ( array_key_exists( 'linkedin', $gi_social_media ) ): ?>
      <li class="icon linkedin">
        <a href="<?php echo $gi_social_media['linkedin']; ?>" target="_blank" rel="noopener" aria-label="LinkedIn Link">
          <span class="label">LinkedIn</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" role="img">
            <title>LinkedIn Icon</title>
            <path class="background" d="M400,200c0,110.46-89.54,200-200,200h0C89.54,400,0,310.46,0,200h0C0,89.54,89.54,0,200,0h0c110.46,0,200,89.54,200,200h0Z"/>
            <circle class="foreground" cx="129.16" cy="120.77" r="25.76"/>
            <rect  class="foreground" x="107.7" y="163.7" width="42.93" height="128.8" rx="1.91" ry="1.91"/>
            <path class="foreground" d="M296.6,210.93v72.98c0,4.72-3.86,8.59-8.59,8.59h-25.76c-4.72,0-8.59-3.86-8.59-8.59v-60.11c0-11.85-9.62-21.47-21.47-21.47s-21.47,9.62-21.47,21.47v60.11c0,4.72-3.86,8.59-8.59,8.59h-25.76c-4.72,0-8.59-3.86-8.59-8.59v-111.62c0-4.72,3.86-8.59,8.59-8.59h25.76c4.72,0,8.59,3.86,8.59,8.59v5.5c8.59-11.12,22.8-18.37,38.64-18.37,23.7,0,47.23,17.17,47.23,51.52Z"/>
          </svg>
        </a>
      </li>
    <?php endif; ?>
    <?php if ( array_key_exists( 'twitter', $gi_social_media ) ): ?>
      <li class="icon twitter">
        <a href="<?php echo $gi_social_media['twitter']; ?>" target="_blank" rel="noopener" aria-label="Twitter Link">
          <span class="label">Twitter</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" role="img">
            <title>Twitter X Icon</title>
            <path class="background" d="M400,200c0,110.46-89.54,200-200,200h0C89.54,400,0,310.46,0,200h0C0,89.54,89.54,0,200,0h0c110.46,0,200,89.54,200,200h0Z"/>
            <path class="foreground" d="M228.86,181.63l80.91-86.54h-30.73l-63.5,67.92-48.63-67.92h-84.03l85.07,118.83-85.07,90.99h30.73l67.67-72.38,51.82,72.38h84.03l-88.26-123.28ZM126.18,117.34h29.3l118.35,165.31h-29.3L126.18,117.34Z"/>
          </svg>
        </a>
      </li>
    <?php endif; ?>
    <?php if ( array_key_exists( 'youtube', $gi_social_media ) ): ?>
      <li class="icon youtube">
        <a href="<?php echo $gi_social_media['youtube']; ?>" target="_blank" rel="noopener" aria-label="YouTube Link">
          <span class="label">YouTube</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" role="img">
            <title>YouTube Icon</title>
            <path class="background" d="M400,200c0,110.46-89.54,200-200,200h0C89.54,400,0,310.46,0,200h0C0,89.54,89.54,0,200,0h0c110.46,0,200,89.54,200,200h0Z"/>
            <path class="foreground" d="M286.19,115.26H113.81c-17.03,0-30.84,13.81-30.84,30.83v107.82c0,17.03,13.81,30.83,30.84,30.83h172.38c17.02,0,30.83-13.8,30.83-30.83v-107.82c0-17.02-13.81-30.83-30.83-30.83ZM227.69,207.44l-47.93,23.95c-5.53,2.77-12.04-1.25-12.04-7.43v-47.92c0-6.18,6.51-10.2,12.04-7.44l47.93,23.96c6.12,3.06,6.12,11.8,0,14.87Z"/>
          </svg>
        </a>
      </li>
    <?php endif; ?>
  </ul>
<?php endif; ?>