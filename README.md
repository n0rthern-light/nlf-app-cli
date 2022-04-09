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

Simple framework based on core symfony components for any production ready CLI application

Utilizing such concepts as (all based on symfony components):
- CLI user interface
- Dependency container
- YAML configuration
- Env processor
- Code quality tools

All commands placed in `src/UI` are automatically registered for the `bin/console` usage
