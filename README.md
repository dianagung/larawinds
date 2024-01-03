> Warning: under development

# Installations

Follow the guide for installing Larawinds on your Laravel projects.

## Composer

First, you need to install composer packages for Larawinds:

```console
composer require dianagung/larawinds
```

## Registering Service Provider

You need to register the Larawinds service provider in `config/app.php`:

```
Dianagung\Larawinds\LarawindsServiceProvider::class
```

## Setting Tailwind

Open `tailwind.config.js` file on your project. Then add the following command :

```javascript
content: [
    "./vendor/dianagung/larawinds/src/resources/**/*.blade.php",
    "./vendor/dianagung/larawinds/src/resources/**/*.js",
  ],
```

## Dependencies

Install NPM packages below:

```console
npm install alpinejs 
npm install sweetalert2
npm install vanillajs-datepicker --save-dev
```

Then, run npm development server:

```console
npm run dev
```

## Components

### Input Text

```blade
<x-input.text name="title" label="Content Title" placeholder="Enter title here" value="" />
```

### Input Number

```blade
<x-input.number name="price" label="Price" prefix="IDR" suffix="Pcs" maxlength="18" value="" />
```

### Input Password

```blade
<x-input.password name="password" label="Password" placeholder="Enter password here" value="" />
```

### Input Date

```blade
<x-input.date name="date" label="Select Date" placeholder="mm/dd/yyyy" value="" />
```

### Input Textarea

```blade
<x-input.textarea name="description" label="Description" placeholder="Describe yourself here..." />
```

## Checkbox & Radio

### Checkbox

**Uncheck**

```blade
<x-checkbox name="newsletter" title="Submit Newsletter" text="Get upto 45% OFF discount for this seasons." />
```

**Checked**

```blade
<x-checkbox name="newsletter" title="Submit Newsletter" text="Get upto 45% OFF discount for this seasons." checked="1" />
```
or
```blade
<x-checkbox name="newsletter" title="Submit Newsletter" text="Get upto 45% OFF discount for this seasons." checked="true" />
```

## Uploads

### Upload Image

```blade
<x-upload.image name="avatar" label="Upload Avatar" accept="jpg,png" maxsize="2 MB" />
```

## Form

### Card Form

**Method Store**

```blade
<x-card.form title="Card Title" action="{{ route('route') }}" btext="Save">
    // other components here
</x-card.form>
```

**Method Update**

```blade
<x-card.form title="Card Title" action="{{ route('route') }}" btext="Update" method="PUT">
    // other components here
</x-card.form>
```

### Delete (Button)

```blade
<x-delete action="{{ route('route') }}" confirm-title="Are you sure want to delete" confirm-text="This action can not be undo!" confirm-yes="Yes. Delete it!" confirm-no="No. Cancel." />
```

## Buttons

### Primary

```blade
<x-button.primary type="button" text="Save" />
```

### Secondary

```blade
<x-button.secondary type="button" text="Cancel" />
```


## License

The Laravel framework and Tailwind CSS is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
