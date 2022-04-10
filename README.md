# nlf-cli

```bash
.
├── .env.example
├── bin
│   └── console
├── composer.json
├── composer.lock
├── config
│   ├── bindings.yaml
│   ├── cli-commands.yaml
│   ├── parameters.yaml
│   └── services.yaml
├── README.md
└── src
    ├── Application
    │   ├── ImplService.php
    │   └── ServiceInterface.php
    └── UI
        └── HelloWorldCommand.php
```

Template console application based on core symfony components, ready for production usage.

Utilizing such concepts as (all based on symfony components):
- CLI user interface
- Dependency container
- YAML configuration
- Env processor
- Code quality tools

All commands placed in `src/UI` are automatically registered for the `bin/console` usage
