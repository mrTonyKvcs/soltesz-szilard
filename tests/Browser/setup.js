import { execFileSync } from 'node:child_process';
export default function () {
    execFileSync('docker', ['compose', 'exec', '-T', 'app', 'php', 'scripts/e2e-fixtures.php', 'prepare'], { stdio: 'inherit' });
}
